extends TileMap

var draw_bounds : Rect2
var draw_center : Vector2
@export var grid_size : int = 64

func _ready():
	draw_bounds = calculate_bounds(self)
	draw_center = draw_bounds.get_center()

func _draw():
#	draw_line(Vector2(draw_center.x, 0), Vector2(draw_center.x, draw_bounds.size.x), Color.CORAL, 0.5, true)
#	draw_line(Vector2(0, draw_center.y), Vector2(draw_bounds.size.y, draw_center.y), Color.CORAL, 0.5, true)
	for x in range(0, draw_bounds.size.x, grid_size):
		draw_line(Vector2(x, 0), Vector2(x, draw_bounds.size.y), Color.DIM_GRAY, 0.5, true)
	for y in range(0, draw_bounds.size.y, grid_size):
		draw_line(Vector2(0, y), Vector2(draw_bounds.size.x, y), Color.DIM_GRAY, 0.5, true)
		
func calculate_bounds(tilemap : TileMap):
	var cell_bounds = tilemap.get_used_rect()
	var data = tilemap.tile_set.tile_size
	var cell_to_pixel = Transform2D(
		Vector2(data.x * tilemap.scale.x, 0),
		Vector2(0, data.y * tilemap.scale.y),
		Vector2())
	var pos : Vector2 = cell_bounds.position
	var siz : Vector2 = cell_bounds.size
	var left_top = cell_to_pixel * pos
	var w_h = cell_to_pixel * siz
	var i = Rect2(left_top, w_h)
	return i
