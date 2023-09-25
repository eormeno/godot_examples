extends StaticBody2D

var can_drag = false
var grabbed_offset = Vector2()
var on_click_instantiate : bool = true
var snap_grid_size : int = 16
var event_emited : bool = false

func _input_event(viewport, event, shape_idx):
	if event is InputEventMouseButton:
		if on_click_instantiate:
			if event.is_released():
				get_parent().emit_signal("left_mouse_button_clicked", get_parent().command_config)
			return
		can_drag = event.pressed
		grabbed_offset = get_parent().position - get_global_mouse_position()

func _process(delta):
	if Input.is_mouse_button_pressed(MOUSE_BUTTON_LEFT):
		if can_drag:
			var pos = get_parent().get_global_mouse_position() + grabbed_offset
			pos.x = int(pos.x / snap_grid_size) * snap_grid_size
			pos.y = int(pos.y / snap_grid_size) * snap_grid_size
			get_parent().position = pos
