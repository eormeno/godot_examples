class_name Signals extends Node

signal execute_command(command : Move)
signal command_executed(command : Move)

enum Move { NO_MOVE, LOOK_RIGHT, LOOK_LEFT, WALK, WAIT, LADDER_UP, LADDER_DOWN, JUMP_UP }

func notify_execute_command(command : Move):
	emit_signal("execute_command", command)

func notify_command_executed(command : Move):
	emit_signal("command_executed", command)
