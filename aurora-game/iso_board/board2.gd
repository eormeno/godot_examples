extends Node2D

var player : Area2D
var tree : Tree
var terminal : Terminal
var current_dir : TreeItem
var current_script_id : int

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
		ret.message = response.errors[0]
		return ret
	run_code(response.compiled)
	ret.status = Terminal.SUCCESS
	return ret

func find_item(item_name : String):
	for item in current_dir.get_children():
		if item.get_text(0) == item_name:
			return item
	return null

func evaluate(sub_script:String):
	var lines : PackedStringArray = sub_script.split("\n")
	var new_script : String = "var ret\n\t"
	for l in lines:
		new_script += "ret = await node." + l + "\n\t"
		new_script += "print(ret)\n\t"
	var full_script = "func eval(node):\n\t" + new_script + "\n\treturn ret"
	print(full_script)
	var script = GDScript.new()
	script.set_source_code(full_script)
	script.reload()
	var obj = RefCounted.new()
	obj.set_script(script)
	var ret = await obj.eval(self)
	return ret

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
	
func run_code(code: Array):
	var stack = []
	var regs = [null, null, null, null]
	var mem = {}

	for i in range(code.size()):
		var cl = code[i]
		var _line : int = int(cl[0])
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
#				if not mem.has(data):
#					raise Exception("Undefined variable " + str(data) + " at line " + str(line_number))
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
				terminal.print(_str)
			"IFI":
				var condition = regs[0]
				if not condition:
					i = data
			"JMP":
				i = data
