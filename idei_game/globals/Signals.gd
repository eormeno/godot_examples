class_name Signals extends Node

signal request(request)
signal command_executed(command : Move, result : Result)

enum Move { NO_MOVE, LOOK_RIGHT, LOOK_LEFT, WALK, WAIT, LADDER_UP, LADDER_DOWN, JUMP_UP }
enum Result { SUCCESSFULLY, FAILED }

func send_request(signal_name : String, success_callback : Callable, error_callback : Callable):
	var request_data = {
		signal_name = signal_name,
		success = success_callback,
		error = error_callback
	}
	emit_signal("request", request_data)

func send_untracked_request(signal_name : String):
	self.send_request(signal_name, Callable(), Callable())

func notify_command_executed(command : Move, result : Result = Result.SUCCESSFULLY):
	emit_signal("command_executed", command, result)
