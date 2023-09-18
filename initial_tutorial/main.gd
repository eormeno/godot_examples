extends Node2D


func _ready():
	var idei_ui = preload("res://ui/idei.tscn")

	var idei_instance = idei_ui.instantiate()
	add_child(idei_instance)

# Called every frame. 'delta' is the elapsed time since the previous frame.
func _process(delta):
	pass
