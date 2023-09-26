extends Node
class_name InputProcesser

func _process(_delta):
	if Input.is_action_pressed("ui_right"):
		global_signals.notify_execute_command(Signals.Move.LOOK_RIGHT)
		global_signals.notify_execute_command(Signals.Move.WALK)
		return
	if Input.is_action_pressed("ui_left"):
		global_signals.notify_execute_command(Signals.Move.LOOK_LEFT)
		global_signals.notify_execute_command(Signals.Move.WALK)
		return
	if Input.is_action_pressed("ui_up"):
		global_signals.notify_execute_command(Signals.Move.LADDER_UP)
		return
	if Input.is_action_pressed("ui_down"):
		global_signals.notify_execute_command(Signals.Move.LADDER_DOWN)
		return
	if Input.is_key_pressed(KEY_SPACE):
		global_signals.notify_execute_command(Signals.Move.JUMP_UP)
		return
	
#	global_signals.notify_execute_command(Signals.Move.WAIT)
