class_name Signals extends Node

signal execute_command(command : Move)
signal command_executed(command : Move, result : Result)

enum Move { NO_MOVE, LOOK_RIGHT, LOOK_LEFT, WALK, WAIT, LADDER_UP, LADDER_DOWN, JUMP_UP }
enum Result { SUCCESSFULLY, FAILED }

func notify_execute_command(command : Move):
	emit_signal("execute_command", command)

func notify_command_executed(command : Move, result : Result = Result.SUCCESSFULLY):
	emit_signal("command_executed", command, result)
