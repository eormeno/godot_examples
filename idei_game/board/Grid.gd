extends TileMap

var screen_size
var screen_center
var player : Node
@export var grid_size : int = 64

func _ready():
	screen_size = calculate_bounds(self)
	screen_center = screen_size / 2
	player = $Player

func _draw():
	draw_line(Vector2(screen_center.x, 0), Vector2(screen_center.x, screen_size.y), Color.CORAL, 0.5, true)
	draw_line(Vector2(0, screen_center.y), Vector2(screen_size.x, screen_center.y), Color.CORAL, 0.5, true)

	for x in range(0, screen_size.x, grid_size):
		draw_line(Vector2(x, 0), Vector2(x, screen_size.y), Color.DIM_GRAY, 0.5, true)
	for y in range(0, screen_size.y, grid_size):
		draw_line(Vector2(0, y), Vector2(screen_size.x, y), Color.DIM_GRAY, 0.5, true)
		
func calculate_bounds(tilemap : TileMap):
	return Vector2i(960,960)
#	var cell_bounds = tilemap.get_used_rect()
#	var data = tilemap.tile_set.tile_size
#	# create transform
#	var cell_to_pixel = Transform2D(Vector2(data.x * tilemap.scale.x, 0), Vector2(0, data.y * tilemap.scale.y), Vector2())
#	# apply transform
#	return Rect2(cell_to_pixel * cell_bounds.position, cell_to_pixel * cell_bounds.size)
