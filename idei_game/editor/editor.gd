extends CanvasModulate

func _ready():
	var new_cmds : Array[Node2D] = BotCommandFactory.instance().create_available()
	var sep : int = 4
	var hor : int = sep
	var ver : int = sep
	var cols: int = 3
	var col : int = 0
	for cmd in new_cmds:
		cmd.position.x = hor
		cmd.position.y = ver
		add_child(cmd)
		col += 1
		if col == cols:
			col = 0
			hor = sep
			ver += 32 + sep
		else:
			hor += 128 + sep
