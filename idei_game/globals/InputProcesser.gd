extends Node
class_name InputProcesser

func _process(_delta):
	if Input.is_action_pressed("ui_right"):
		global_signals.send_untracked_request("look_right")
		global_signals.send_untracked_request("walk")
		return
	if Input.is_action_pressed("ui_left"):
		global_signals.send_untracked_request("look_left")
		global_signals.send_untracked_request("walk")
		return
	if Input.is_action_pressed("ui_up"):
		global_signals.send_untracked_request("ladder_up")
		return
	if Input.is_action_pressed("ui_down"):
		global_signals.send_untracked_request("ladder_down")
		return
	if Input.is_key_pressed(KEY_SPACE):
		global_signals.send_untracked_request("jump_up")
		return
