class_name BotCommand extends Control

signal pressed()

var command_config : Dictionary
var label : Label
var button : Button

func _init():
	label = Label.new()
	button = Button.new()
	add_child(button)

func set_info(config : Dictionary):
	command_config = config
	label.text = command_config.name
	button.text = command_config.name
	button.tooltip_text = command_config.description
	button.connect("button_down", button_pressed)

func button_pressed():
	emit_signal("pressed", command_config.name)
