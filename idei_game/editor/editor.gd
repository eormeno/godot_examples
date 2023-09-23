extends VBoxContainer

func _ready():
	var new_cmds : Array[Node] = BotCommandFactory.instance().create_available()
	for cmd in new_cmds:
		$Commands.add_child(cmd)
		$Commands.add_spacer(false)
		cmd.connect("pressed", on_pressed)
	#BotCommandFactory.instance().list()

func on_pressed(command : String):
	$VBoxContainer/Program.add_item(command)
	
	
func _process(_delta):
	pass
