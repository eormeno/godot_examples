extends Node2D

@export var editor : Node2D
@export var items : ItemList

func _ready():
	global_signals.connect("command_executed", _on_command_executed)

func _process(_delta):
	pass

func _on_toolbar_selected(command):
	items.add_item(command)

func _on_button_pressed():
	for i in items.get_item_count():
		var command : String = items.get_item_text(i)
		if command == "walk":
			global_signals.notify_execute_command(Signals.Move.WALK)
		if command == "wait":
			global_signals.notify_execute_command(Signals.Move.WAIT)
		if command == "jump_up":
			global_signals.notify_execute_command(Signals.Move.JUMP_UP)
		if command == "look_left":
			global_signals.notify_execute_command(Signals.Move.LOOK_LEFT)
		if command == "look_right":
			global_signals.notify_execute_command(Signals.Move.LOOK_RIGHT)

func _on_command_executed(command : Signals.Move):
	print(command)
