@tool
class_name PathNode extends Node2D
const BACK_COMMAND = "back"
const BACK_COLOR : Color = Color.WHITE
const TEXT_FONT_SIZE : int = 8
enum LightColors {RED, BLUE, GREEN, YELLOW, WHITE}
var place_name : String = "next"
@export var light_color : LightColors
static var font
static var light_texture
var show : bool
var light : PointLight2D
var tween : Tween
const color_info = {
	LightColors.RED : {"name" : "rojo", "color": Color.RED},
	LightColors.BLUE : {"name" : "azul", "color": Color.BLUE},
	LightColors.GREEN : {"name" : "verde", "color": Color.GREEN},
	LightColors.YELLOW : {"name" : "amarillo", "color": Color.YELLOW},
	LightColors.WHITE : {"name" : "blanco", "color": Color.WHITE},
}

func _ready():
	if not font:
		var label : Label = Label.new()
		font = label.get_theme_default_font()
		light_texture = load("res://path/path1.png")
	place_name = color_info[light_color].name
	light = PointLight2D.new()
	light.color = color_info[light_color].color
	light.texture = light_texture
	light_off()
	add_child(light)
	tween = self.create_tween().set_loops()
	tween.tween_property(light, "energy", 0, 1).set_trans(Tween.TRANS_LINEAR)
	tween.tween_property(light, "energy", 2, 1).set_trans(Tween.TRANS_LINEAR)
	tween.play()

func light_on():
	light.color = color_info[light_color].color
	light.visible = true

func light_off():
	light.visible = false
	
func set_as_back(on : bool):
	if on:
		light.color = BACK_COLOR
	light.visible = on

func _draw():
#	if not Engine.is_editor_hint():
#		return
	var pos = position
	pos -= global_position
	var col = Color.AQUA
	col.a = 0.5
#	draw_circle(pos, 15, col)
	var ct : Vector2 = font.get_string_size(place_name, HORIZONTAL_ALIGNMENT_CENTER, -1, TEXT_FONT_SIZE)
	pos.x -= ct.x / 2
	pos.y += font.get_ascent(TEXT_FONT_SIZE) / 2
#	draw_string(font, pos, place_name, HORIZONTAL_ALIGNMENT_CENTER,-1,TEXT_FONT_SIZE,Color.BLACK)

func _process(_delta):
#	if not Engine.is_editor_hint():
#		return
	queue_redraw()
	
func get_destination_nodes() -> Array[PathNode]:
	var ret : Array[PathNode] = []
	for trans in get_children():
		if not trans is PathTransition:
			continue
		var t : PathTransition = trans
		if not t.destination:
			continue
		ret.append(t.destination)
	return ret
	
func get_destinations() -> Array[String]:
	var ret : Array[String] = []
	ret.append(BACK_COMMAND)
	for des in get_destination_nodes():
		ret.append(des.place_name)
	return ret

func enable_destinations():
	light_off()
	for des in get_destination_nodes():
		des.light_on()

func disable_destinations():
	for des in get_destination_nodes():
		des.light_off()

func get_destination(dest_name : String):
	for trans in get_children():
		if not trans is PathTransition:
			continue
		var t : PathTransition = trans
		if t.destination and t.destination.place_name == dest_name:
			return t.destination
	return null
