extends Node2D

signal send_code(code : Array[String])

var editor : CodeEdit
var text_input : LineEdit
var send_button : TextureButton
var player : Area2D
var expression : Expression
var tree : Tree
var prompt_dir : Label

func _ready():
	player = find_child("player_2")
	editor = find_child("console")
	text_input = find_child("prompt")
	send_button = find_child("send button")
	tree = find_child("Tree")
	prompt_dir = find_child("prompt_dir")
	text_input.grab_focus()
	expression = Expression.new()
	evaluate()

func _on_run_button_pressed():
	_on_prompt_text_submitted(text_input.text)

func clear():
	if editor.get_line_count() == 0:
		return
	editor.clear()
	
func move_to(target : String, success_message : String = "Ok", error_message : String = ""):
	var success : bool = player.set_target(target)
	var message : String = success_message
	if not success:
		message = error_message
		if message.is_empty():
			message = "'" + target + "' no está como posible destino"
	return message
	
func red():
	return move_to("red")
	
func green():
	return move_to("green")
	
func blue():
	return move_to("blue")

func yellow():
	return move_to("yellow")

func back():
	return move_to("back", "Ok", "No se puede retroceder más.")

func _on_prompt_text_submitted(new_text: String):
	if new_text.is_empty():
		return
	var _error = expression.parse(new_text)
	var result = expression.execute([], self)
	if not expression.has_execute_failed():
		editor.text = editor.text + new_text + ": " + result + "\n"
		text_input.clear()
		return
	editor.text += expression.get_error_text() + "\n"
	return
#	var lines : Array[String] = []
#	lines.append(new_text)
#	editor.text = editor.text + new_text + "\n"
##	for l in editor.get_line_count():
##		lines.append(editor.get_line(l))
#	text_input.clear()
#	emit_signal("send_code", lines)
func get_data():
	return "cosa";

func evaluate():
	var script = GDScript.new()
	script.set_source_code("func eval(node):
				for i in range(1,10):
					print(node.get_data())
					if i == 5:
						print(\"si\")
				return")
	script.reload()
	var obj = RefCounted.new()
	obj.set_script(script)
	return obj.eval(self)

func _on_tree_item_selected():
	var item : TreeItem = tree.get_selected()
	if item.get_metadata(0) == "folder":
		prompt_dir.text = item.get_text(0) + " $ :"
	pass
