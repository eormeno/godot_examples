extends Node2D

var editor : CodeEdit
var player : Area2D
var expression : Expression
var tree : Tree
var terminal : Terminal
var current_dir : TreeItem

func _ready():
	player = find_child("player_2")
	editor = find_child("console")
	tree = find_child("Tree")
	terminal = find_child("terminal")
	terminal.connect("command_entered", _on_command_entered)
	expression = Expression.new()
	
func _on_command_entered(command : String, callback : Callable):
	var tokens : PackedStringArray = command.split(" ")
	if !self.has_method("cmd_" + tokens[0]):
		var script_item : TreeItem = find_item(tokens[0])
		if !script_item:
			callback.call("Not found", true)
			return
		var script_file_name = script_item.get_metadata(0).file
		var sub_script = tree.load_script(script_file_name)
		var result = await evaluate(sub_script)
		callback.call(result, false)
	else:
		var ret = self.call("cmd_" + tokens[0], tokens)
		callback.call(ret.message, ret.error)

func clear():
	if editor.get_line_count() == 0:
		return
	editor.clear()
	
func move_to(target : String, success_message : String = "Ok", error_message : String = ""):
	var success : bool
	var message : String = success_message
	success = player.set_target(target)
	await player.target_reached
	if not success:
		message = error_message
		if message.is_empty():
			message = "'" + target + "' no está como posible destino"
	return message
	
func cmd_dir(_arg : PackedStringArray):
	var list : String = ""
	for item in current_dir.get_children():
		list += "[" + item.get_metadata(0).type + "]\t" + item.get_text(0) + "\n"
	return { message = list, error = false }
	
func cmd_cd(arg : PackedStringArray):
	var path : String = arg[1]
	var ret = { message = "", error = false }
	if path == "..":
		var parent = current_dir.get_parent()
		if parent:
			parent.select(0)
	else:
		var item = find_item(path)
		if !item:
			ret.message = "Not found"
			ret.error = true
		elif item.get_metadata(0).type == "folder":
			item.select(0)
		else:
			ret.message = arg[1] + " is not a directory."
			ret.error = true
	return ret

func cmd_edit(arg : PackedStringArray):
	var ret = { message = "", error = false }
	if arg.size() != 2:
		ret.message = "Este comando requiere el nombre del script que vas a editar."
		ret.error = true
		return ret
	var script = find_item(arg[1])
	if !script:
		ret.message = "El script no fue encontrado en la carpeta actual."
		ret.error = true
		return ret
	ret.message = "Ok, voy a editar " + arg[1]
	return ret
		

func find_item(item_name : String):
	for item in current_dir.get_children():
		if item.get_text(0) == item_name:
			return item
	return null

func _on_prompt_text_submitted(new_text: String):
	if new_text.is_empty():
		return
	var _error = expression.parse(new_text)
	var result = expression.execute([], self)
	if not expression.has_execute_failed():
		editor.text = editor.text + new_text + ": " + result + "\n"
		return
	editor.text += expression.get_error_text() + "\n"
	return

func evaluate(sub_script:String):
	var script = GDScript.new()
	script.set_source_code("func eval(node):\n\tvar ret = await node." + sub_script + "\n\treturn ret")
	script.reload()
	var obj = RefCounted.new()
	obj.set_script(script)
	var ret = await obj.eval(self)
	return ret

func _on_tree_item_selected():
	var item : TreeItem = tree.get_selected()
	current_dir = item
	if item.get_metadata(0).type != "folder":
		terminal.set_input(item.get_text(0))
		current_dir = item.get_parent()
	else:
		terminal.set_input("")
	terminal.set_prompt(tree.get_full_path(current_dir))
