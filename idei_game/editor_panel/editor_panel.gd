extends Node2D

@export var editor : Node2D
@export var items : ItemList
var execution_line : int = 0
var running_code : bool = false
var running_command : bool = false
var play_button : TextureButton
var step_button : Button

func _ready():
	play_button = find_child("Play")
	step_button = find_child("Step")
	global_signals.connect("command_executed", _on_command_executed)
	var info = persist_user_data.get_data("editor")
	for i in info:
		items.add_item(i)
	if info.size() > 0:
		items.select(0)

func _on_toolbar_selected(command):
	items.add_item(command)
	persist_user_data.set_data("editor", items_to_array())
	
func items_to_array():
	var a : Array[String] = []
	for i in items.get_item_count():
		a.append(items.get_item_text(i))
	return a

func _on_button_pressed():
	step_button.disabled = true
	run_line()

func run_line():
	if execution_line >= items.item_count:
		running_code = false
		play_button.disabled = false
		items.deselect_all()
		execution_line = 0
		return
	items.select(execution_line)
	running_command = true
	var command : String = items.get_item_text(execution_line)
	global_signals.send_request(command, _on_success, _on_error)
	
func _on_success(response):
	print(response)
	
func _on_error(response):
	printerr(response)

func _on_command_executed(_command : Signals.Move, _result : Signals.Result):
	if not running_code and not running_command:
		return
	if _result == Signals.Result.FAILED:
		items.set_item_custom_bg_color(execution_line, Color.LIGHT_CORAL)
		printerr(Signals.Move.keys()[_command])
	else:
		items.set_item_custom_fg_color(execution_line, Color.AQUAMARINE)
	running_command = false
	step_button.disabled = false
	execution_line += 1

func _process(_delta):
	if not running_code:
		return
	if running_command:
		return
	run_line()

func _on_play_pressed():
	play_button.disabled = true
	running_code = true

func _on_pause_pressed():
	pass # Replace with function body.

func _on_stop_pressed():
	pass # Replace with function body.

func _on_reset_pressed():
	get_tree().reload_current_scene()

func _on_delete_pressed():
	var sel = items.get_selected_items()
	items.remove_item(sel[0])
#	items.clear()
	persist_user_data.set_data("editor", items_to_array())
