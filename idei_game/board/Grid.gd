extends Node2D

var screen_size
var screen_center
var player : Node
@export var grid_size : int = 32



func _ready():
	screen_size = get_viewport_rect().size
	screen_center = screen_size / 2
	player = $Player
	player.position = screen_center

func _draw():
	draw_line(Vector2(screen_center.x, 0), Vector2(screen_center.x, screen_size.y), Color.CORAL, 0.5, true)
	draw_line(Vector2(0, screen_center.y), Vector2(screen_size.x, screen_center.y), Color.CORAL, 0.5, true)

	for x in range(0, screen_size.x, grid_size):
		draw_line(Vector2(x, 0), Vector2(x, screen_size.y), Color.DIM_GRAY, 0.5, true)
	for y in range(0, screen_size.y, grid_size):
		draw_line(Vector2(0, y), Vector2(screen_size.x, y), Color.DIM_GRAY, 0.5, true)
