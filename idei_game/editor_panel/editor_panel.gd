extends Node2D

@export var editor : Node2D
@export var items : ItemList

func _ready():
	pass # Replace with function body.

func _process(_delta):
	pass

func _on_toolbar_selected(command):
	items.add_item(command)

func _on_button_pressed():
	for i in items.get_item_count():
		print(items.get_item_text(i))
