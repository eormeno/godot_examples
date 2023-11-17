extends Node2D

var player : Area2D
var tree : Tree
var terminal : Terminal
var current_selected_dir : TreeItem
var current_selected_file: TreeItem
var current_editing_file : TreeItem
var executor : Executor
var tool : Dictionary = {}

func _ready():
	player = find_child("player_2")
	tree = find_child("Tree")
	terminal = find_child("terminal")
	terminal.connect("command_entered", _on_command_entered)
	tool = {
		run		= { can = false, button = %run_button	},
		pause	= { can = false, button = %pause_button	},
		stop	= { can = false, button = %stop_button	},
		save	= { can = false, button = %save_button	}
	}
	executor = Executor.new(self, terminal)
	player.set_executor(executor)

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

func cmd_dir(_arg : PackedStringArray):
	var list : String = ""
	for item in current_selected_dir.get_children():
		list += "[" + item.get_metadata(0).type + "]\t" + item.get_text(0) + "\n"
	return { message = list, status = Terminal.SUCCESS }
	
func cmd_cd(arg : PackedStringArray):
	var path : String = arg[1]
	var ret = { message = "", status = Terminal.SUCCESS }
	if path == "..":
		var parent = current_selected_dir.get_parent()
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
	var item : TreeItem = find_item(arg[1])
	if !item:
		ret.message = "No encontré el script " + arg[1] + " en la carpeta actual"
		return ret
	item.select(0)
	var item_info = item.get_metadata(0)
	if item_info.type != "file":
		ret.message = arg[1] + " se una carpeta. No se puede editar"
		return ret
	current_editing_file = item
	$StateChart.send_event("loaded_script")
	var resource = await connection.get_resource(get_script_id())
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
	if get_script_id() == 0:
		ret.message = "Nada que guardar en este momento"
		return ret
	var _resource = await connection.update_resource_content(get_script_id(), %code_editor.text)
	ret.message = "Los cambios fueron guardados"
	ret.status = Terminal.SUCCESS
	return ret
	
func cmd_run(arg : PackedStringArray):
	if !can("run"): return cannot_response("Primero debes abrir un archivo de script")
	var ret = { message = "", status = Terminal.ERROR }
	if arg.size() != 1:
		ret.message = "El comando " + arg[0] + " no requiere ningún parámetro"
		return ret
	var response = await connection.get_compiled_script(get_script_id())
	if response.has("errors"):
		var errs = ""
		for e in response.errors:
			errs += "Error de sintaxis en línea " + str(e.line) + "\n"
		ret.message = errs
		return ret
	%tab_container.current_tab = 0
	executor.run(response.compiled)
	ret.status = Terminal.SUCCESS
	return ret

func find_item(item_name : String):
	for item in current_selected_dir.get_children():
		if item.get_text(0) == item_name:
			return item
	return null

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
	
func get_script_id():
	if !current_editing_file: return 0
	return current_editing_file.get_metadata(0).id

func _on_tree_item_activated():
	var item : TreeItem = tree.get_selected()
	if current_editing_file == item : return
	if item.get_metadata(0).type != "folder":
		current_editing_file = item
		terminal.submit('edit ' + item.get_text(0))

func _on_tree_item_edited():
	var item : TreeItem =  tree.get_selected()
	var new_name : String = item.get_text(0)
	var old_name : String = item.get_metadata(0).name
	if new_name == old_name : return
	var id : int = item.get_metadata(0).id
	var response = await connection.rename_resource(id, new_name)
	if response.has("errors"):
		item.set_text(0, old_name)
		terminal.out(response.errors.name[0], Terminal.ERROR)
	item.set_editable(0, false)

func _on_tree_item_selected():
	var item : TreeItem = tree.get_selected()
	current_selected_dir = item
	if item.get_metadata(0).type != "folder":
		current_selected_dir = item.get_parent()
		current_selected_file = item
	else:
		terminal.set_input("")
	terminal.set_prompt(tree.get_full_path(current_selected_dir))
