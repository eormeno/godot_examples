class_name BotCommand extends Node2D

var command_config : Dictionary
var sprite : Sprite2D
signal left_mouse_button_clicked(config)

func _ready():
	sprite = $sprite

func set_info(config : Dictionary):
	sprite = $sprite
	command_config = config
	var sprite_region = command_config.sprite_region
	sprite.region_rect = get_sprite_region(sprite_region)

func get_sprite_region(region : Array):
	return Rect2(region[0], region[1], region[2], region[3])
