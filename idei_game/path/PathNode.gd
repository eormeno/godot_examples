@tool
class_name PathNode extends Node2D
const BACK_COMMAND = "back"
const TEXT_FONT_SIZE : int = 8
@export var place_name : String = "next"
@export var light_color : Color = Color.ALICE_BLUE
static var font
static var light_texture
var light : PointLight2D
var tween : Tween

func _ready():
	if not font:
		var label : Label = Label.new()
		font = label.get_theme_default_font()
		light_texture = load("res://path/path1.png")
	place_name = place_name.to_lower()
	light = PointLight2D.new()
	light.color = light_color
	light.texture = light_texture
	add_child(light)
	tween = self.create_tween().set_loops()
	tween.tween_property(light, "energy", 0, 1).set_trans(Tween.TRANS_LINEAR)
	tween.tween_property(light, "energy", 1, 1).set_trans(Tween.TRANS_LINEAR)
	tween.play()

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
	draw_string(font, pos, place_name, HORIZONTAL_ALIGNMENT_CENTER,-1,TEXT_FONT_SIZE,Color.BLACK)

func _process(_delta):
#	if not Engine.is_editor_hint():
#		return
	queue_redraw()
	
func get_destinations() -> Array[String]:
	var ret : Array[String] = []
	ret.append(BACK_COMMAND)
	for trans in get_children():
		if not trans is PathTransition:
			continue
		var t : PathTransition = trans
		if not t.destination:
			continue
		ret.append(t.destination.place_name)
	return ret

func get_destination(dest_name : String):
	for trans in get_children():
		var t : PathTransition = trans
		if t.destination.place_name == dest_name:
			return t.destination
	return null
