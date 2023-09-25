class_name BotCommand extends Area2D

var command_config : Dictionary
var sprite : Sprite2D
signal left_mouse_button_clicked(command_name : String)

func _ready():
	sprite = $sprite

func set_info(config : Dictionary):
	sprite = $sprite
	command_config = config
	var sprite_region = command_config.sprite_region
	sprite.region_rect = get_sprite_region(sprite_region)

func get_sprite_region(region : Array):
	return Rect2(region[0], region[1], region[2], region[3])

var can_drag = false
var grabbed_offset = Vector2()
@export var on_click_instantiate : bool = false
@export var snap_grid_size : int = 16
var event_emited : bool = false

func _input_event(_viewport, event, _shape_idx):
	if event is InputEventMouseButton:
		if on_click_instantiate:
			if event.is_released():
				emit_signal("left_mouse_button_clicked", command_config.name)
			return
		can_drag = event.pressed
		grabbed_offset = position - get_global_mouse_position()

func _process(_delta):
	if Input.is_mouse_button_pressed(MOUSE_BUTTON_LEFT):
		if can_drag:
			var pos = get_global_mouse_position() + grabbed_offset
			pos.x = int(pos.x / snap_grid_size) * snap_grid_size
			pos.y = int(pos.y / snap_grid_size) * snap_grid_size
			position = pos
