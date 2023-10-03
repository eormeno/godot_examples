@tool
class_name PathNode extends Node2D

func _draw():
	if not Engine.is_editor_hint():
		return
	var pos = position
	pos -= global_position
	draw_circle(pos, 20, Color.AQUA)

func _process(delta):
	if not Engine.is_editor_hint():
		return
	queue_redraw()
