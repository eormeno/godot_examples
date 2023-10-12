extends Node2D

var slot : Vector2 = Vector2(20, 20)

func add_command(cmd : BotCommand):
	cmd.position = slot
	add_child(cmd)
	slot.y += 40
