extends Node2D

var player : Area2D
var tree : Tree
var terminal : Terminal
var current_dir : TreeItem
var current_script_id : int
var executor : Executor

var tool : Dictionary = {}

func _ready():
	player = find_child("player_2")
	tree = find_child("Tree")
	terminal = find_child("terminal")
	terminal.connect("command_entered", _on_command_entered)
	tool = {
		run		= { can = false, button = %run_button },
		pause	= { can = false, button = %pause_button },
		stop	= { can = false, button = %stop_button },
		save	= { can = false, button = %save_button }
	}
	executor = Executor.new(self, terminal)

func _on_command_entered(command : String, callback : Callable):
	var tokens : PackedStringArray = command.split(" ")
	if !self.has_method("cmd_" + tokens[0]):
		var script_item : TreeItem = find_item(tokens[0])
		if !script_item:
			callback.call("No encontré ese comando", Terminal.ERROR)
			return
	else:
		var ret = await self.call("cmd_" + tokens[0], tokens)
		callback.call(ret.message, ret.status)

func move_to(target : String):
	var success : bool
	var ret = { message = "", status = Terminal.SUCCESS }
	success = player.set_target(target)
	if !success:
		ret.message = "Ahora no puedo realizar esa acción"
		ret.status = Terminal.WARNING
	else:
		await player.target_reached
	return ret
	
func cmd_dir(_arg : PackedStringArray):
	var list : String = ""
	for item in current_dir.get_children():
		list += "[" + item.get_metadata(0).type + "]\t" + item.get_text(0) + "\n"
	return { message = list, status = Terminal.SUCCESS }
	
func cmd_cd(arg : PackedStringArray):
	var path : String = arg[1]
	var ret = { message = "", status = Terminal.SUCCESS }
	if path == "..":
		var parent = current_dir.get_parent()
		if parent:
			parent.select(0)
	else:
		var item = find_item(path)
		if !item:
			ret.message = "No encontré esa carpeta"
			ret.status = Terminal.ERROR
		elif item.get_metadata(0).type == "folder":
			item.select(0)
		else:
			ret.message = arg[1] + " no es una carpeta"
			ret.status = Terminal.ERROR
	return ret

func cmd_edit(arg : PackedStringArray):
	var ret = { message = "", status = Terminal.ERROR }
	if arg.size() != 2:
		ret.message = "El comando " + arg[0] + " requiere el nombre del script"
		return ret
	var item = find_item(arg[1])
	if !item:
		ret.message = "No encontré el script " + arg[1] + " en la carpeta actual"
		return ret
	var item_info = item.get_metadata(0)
	if item_info.type != "file":
		ret.message = arg[1] + " se una carpeta. No se puede editar"
		return ret
		
	current_script_id = item_info.id
	$StateChart.send_event("loaded_script")
	
	var resource = await connection.get_resource(current_script_id)
	%code_editor.text = resource.resource.content
	%tab_container.current_tab = 1
	ret.status = Terminal.SUCCESS
	return ret
	
func cmd_save(arg : PackedStringArray):
	var ret = { message = "", status = Terminal.ERROR }
	if !can("save"): return cannot_response()
	if arg.size() != 1:
		ret.message = "El comando " + arg[0] + " no requiere ningún parámetro"
		return ret
	if current_script_id == 0:
		ret.message = "Nada que guardar en este momento"
		return ret
	var _resource = await connection.update_resource_content(current_script_id, %code_editor.text)
	ret.message = "Los cambios fueron guardados"
	ret.status = Terminal.SUCCESS
	return ret
	
func cmd_run(arg : PackedStringArray):
	if !can("run"): return cannot_response("Primero debes abrir un archivo de script")
	var ret = { message = "", status = Terminal.ERROR }
	if arg.size() != 1:
		ret.message = "El comando " + arg[0] + " no requiere ningún parámetro"
		return ret
	var response = await connection.get_compiled_script(current_script_id)
	if response.has("errors"):
		
		var errs = ""
		for e in response.errors:
			errs += "Error de sintaxis en línea " + str(e.line) + "\n"
		ret.message = errs
		return ret
	compiled_code = response.compiled
#	run_code_old(response.compiled)
#	_start_running(compiled_code)
	executor.run(compiled_code)
	ret.status = Terminal.SUCCESS
	return ret

func find_item(item_name : String):
	for item in current_dir.get_children():
		if item.get_text(0) == item_name:
			return item
	return null

func _on_tree_item_selected():
	var item : TreeItem = tree.get_selected()
	current_dir = item
	if item.get_metadata(0).type != "folder":
		current_dir = item.get_parent()
		terminal.submit('edit ' + item.get_text(0))
	else:
		terminal.set_input("")
	terminal.set_prompt(tree.get_full_path(current_dir))

func _on_save_button_pressed():
	terminal.submit("save")

func _on_run_button_pressed():
	terminal.submit("run")

func _update_ui_states():
	for t in tool.keys():
		tool[t].button.disabled = !tool[t].can
		
func can(tool_name:String):
	return tool[tool_name].can
	
func cannot_response(message : String = "No se puede ejecutar"):
	return { message = message, status = Terminal.ERROR }

func _on_without_script_state_entered():
	tool.run.can = false
	tool.stop.can = false
	tool.pause.can = false
	tool.save.can = false
	_update_ui_states()

func _on_editing_script_state_entered():
	tool.run.can = true
	tool.save.can = true
	_update_ui_states()

var compiled_code:Array = []
var stop:bool = true
var _i = 0

var memory : Dictionary = {
	stack = [],
	regs = [null, null, null, null],
	vars = {},
	elapsed = 0.0,
	previous = 0.0
}

func _start_running(code: Array):
	compiled_code = code
	memory.stack = []
	memory.regs = [null, null, null, null]
	memory.vars = {}
	memory.elapsed = 0.0
	memory.previous = 0.0
	_i = 0
	stop = false

func _process(delta):
	if stop: return
	memory.elapsed += delta
	_i = run_code(compiled_code, _i, memory)
	_i += 1
	if _i >= compiled_code.size(): stop = true

func run_code(code:Array, i:int, mem:Dictionary):
	if i >= code.size(): return
	var cl = code[i]
	var line : int = int(cl[0])
	var op : String = cl[1].to_upper()
	var reg : int = int(cl[2])
	var data = cl[3]
	var aux = cl[4]
	var lbl = cl[5]
	match op:
		"REG":
			mem.regs[reg] = data
		"PSH":
			mem.stack.push_back(mem.regs[reg])
		"POP":
			mem.regs[reg] = mem.stack.pop_back()
		"ADD":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left + right
		"SUB":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left - right
		"MUL":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left * right
		"DIV":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left / right
		"MEM":
			var result = mem.regs[reg]
			mem.vars[data] = result
		"GET":
			if not mem.vars.has(data):
				terminal.out("En línea " + str(line) + ", la variable '" + str(data) + "' no está definida.", Terminal.ERROR)
				i = code.size() - 1
			else:
				var value = mem.vars[data]
				mem.regs[reg] = value
		"DELTA":
			if mem.previous == 0.0: mem.previous = mem.elapsed
			var delta = mem.elapsed - mem.previous
			mem.regs[reg] = delta
			mem.previous = mem.elapsed
		"EQL":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left == right
		"NEQ":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left != right
		"GRT":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left > right
		"LST":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left < right
		"GTE":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left >= right
		"LTE":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left <= right
		"LOR":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left or right
		"AND":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = left and right
		"NOT":
			var left = mem.regs[1]
			mem.regs[reg] = not left
		"CAT":
			var left = mem.regs[1]
			var right = mem.regs[2]
			mem.regs[reg] = str(left) + str(right)
		"OUT":
			var _str = str(mem.regs[reg])
			terminal.out(_str)
		"IFI":
			var condition = mem.regs[0]
			if not condition:
				i = data
		"JMP":
			i = data
	return i

func run_code_old(code: Array):
	var stack = []
	var regs = [null, null, null, null]
	var mem = {}
	var i = 0
	while i < code.size():
		var cl = code[i]
		var line : int = int(cl[0])
		var op : String = cl[1].to_upper()
		var reg : int = int(cl[2])
		var data = cl[3]
		match op:
			"REG":
				regs[reg] = data
			"PSH":
				stack.push_back(regs[reg])
			"POP":
				regs[reg] = stack.pop_back()
			"ADD":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left + right
			"SUB":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left - right
			"MUL":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left * right
			"DIV":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left / right
			"MEM":
				var result = regs[reg]
				mem[data] = result
			"GET":
				if not mem.has(data):
					push_error("Undefined variable " + str(data) + " at line " + str(line))
					break
				var value = mem[data]
				regs[reg] = value
			"EQL":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left == right
			"NEQ":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left != right
			"GRT":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left > right
			"LST":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left < right
			"GTE":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left >= right
			"LTE":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left <= right
			"LOR":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left or right
			"AND":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = left and right
			"NOT":
				var left = regs[1]
				regs[reg] = not left
			"CAT":
				var left = regs[1]
				var right = regs[2]
				regs[reg] = str(left) + str(right)
			"OUT":
				var _str = str(regs[reg])
				terminal.out(_str)
			"IFI":
				var condition = regs[0]
				if not condition:
					i = data
			"JMP":
				i = data
		i = i + 1
