extends Node
class_name InputProcesser

enum Move { NONE, RIGHT, LEFT, UP, DOWN, JUMP, TOGGLE_WALK_RUN }
signal movement(dir)

func _process(_delta):
	if Input.is_action_pressed("ui_right"):
		movement.emit(Move.RIGHT)
		return
	if Input.is_action_pressed("ui_left"):
		movement.emit(Move.LEFT)
		return
	if Input.is_action_pressed("ui_up"):
		movement.emit(Move.UP)
		return
	if Input.is_action_pressed("ui_down"):
		movement.emit(Move.DOWN)
		return
	if Input.is_key_pressed(KEY_SPACE):
		movement.emit(Move.JUMP)
		return
	if Input.is_key_pressed(KEY_CTRL):
		movement.emit(Move.TOGGLE_WALK_RUN)
		return
	movement.emit(Move.NONE)
