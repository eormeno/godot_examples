@tool
class_name PathTransition extends Node2D

@export var destination : PathNode

func _draw():
	if not Engine.is_editor_hint():
		return
	if not destination:
		return
	var destination_pos = destination.position - global_position
	var from_pos = get_parent().position - global_position

	draw_line(from_pos, destination_pos, Color.CHARTREUSE, 2.0, true)

func _process(delta):
	if not Engine.is_editor_hint():
		return
	queue_redraw()
