extends Node2D

signal send_code(code : Array[String])

var editor : CodeEdit

func _ready():
	editor = $CanvasLayer/Control/Container/CodeEdit


func _on_run_button_pressed():
	var lines : Array[String] = []
	for l in editor.get_line_count():
		lines.append(editor.get_line(l))
	emit_signal("send_code", lines)
	pass
