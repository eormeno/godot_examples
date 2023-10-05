class_name Level extends Control

@export var config : Resource
var level_config : Dictionary
var title_label : Label
var left_image : TextureRect
var content_label : RichTextLabel
var main_container : PanelContainer

func _ready():
	main_container = find_child("main")
	title_label = find_child("title")
	left_image = find_child("image")
	content_label = find_child("content")
	level_config = load_config()
	if not level_config:
		printerr("Level config not found or undefined.")
		return
	title_label.text = level_config.lore.title
	left_image.texture = load(level_config.lore.image)
	for p in level_config.lore.paragraphs:
		content_label.text += p + "\n\n"

func load_config():
	var ret : Dictionary = {}
	if not config or not FileAccess.file_exists(config.resource_path):
		return ret
	var file = FileAccess.open(config.resource_path, FileAccess.READ)
	ret = JSON.parse_string(file.get_as_text())
	return ret

func _on_button_pressed():
	main_container.visible = false
	pass
