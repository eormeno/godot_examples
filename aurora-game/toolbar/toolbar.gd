extends Node2D

@export var separation : int = 4
@export var columns : int = 3

signal selected(command_name : String)

func _ready():
	var new_cmds : Array[Node2D] = BotCommandFactory.instance().create_available()
	var hor : int = separation
	var ver : int = separation
	var col : int = 0
	for cmd in new_cmds:
		cmd.position.x = hor
		cmd.position.y = ver
		add_child(cmd)
		cmd.connect("left_mouse_button_clicked", command_button_clicked)
		col += 1
		if col == columns:
			col = 0
			hor = separation
			ver += 32 + separation
		else:
			hor += 128 + separation

func command_button_clicked(command_name : String):
	emit_signal("selected", command_name)
