extends Node2D

signal send_code(code : Array[String])

var editor : CodeEdit
var text_input : LineEdit
var send_button : TextureButton

func _ready():
	editor = find_child("console")
	text_input = find_child("prompt")
	send_button = find_child("send button")

func _on_run_button_pressed():
	_on_prompt_text_submitted(text_input.text)

func _on_prompt_text_submitted(new_text):
	var lines : Array[String] = []
	lines.append(new_text)
	editor.text = editor.text + new_text + "\n"
#	for l in editor.get_line_count():
#		lines.append(editor.get_line(l))
	text_input.clear()
	emit_signal("send_code", lines)

