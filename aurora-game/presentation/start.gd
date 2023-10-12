extends Control

@export var background_packed_scene : PackedScene
@export var idei_logo_packed_scene : PackedScene
@export var laboratory_logo_packed_scene : PackedScene
@export var movert_logo_packed_scene : PackedScene
@export var tutorial_packed_scene : PackedScene

var background_scene : Node
var idei_logo_scene : Node
var laboratory_logo_scene : Node
var movert_logo_scene : Node
var tutorial_scene : Node

func _on_display_background_state_entered():
	if not background_scene:
		background_scene = background_packed_scene.instantiate()
	$CanvasLayer.add_child(background_scene)

func _on_shows_idei_state_entered():
	if not idei_logo_scene:
		idei_logo_scene = idei_logo_packed_scene.instantiate()
		idei_logo_scene.connect("finished", _on_finished_scene)
	$CanvasLayer.add_child(idei_logo_scene)
	idei_logo_scene.start()
	
func _on_finished_scene(scene_name : String, _exit_result : String):
	if scene_name == "movert":
		$StateChart.send_event("stop background")
	$StateChart.send_event("finished")

func _on_shows_gel_state_entered():
	if not laboratory_logo_scene:
		laboratory_logo_scene = laboratory_logo_packed_scene.instantiate()
		laboratory_logo_scene.connect("finished", _on_finished_scene)
	$CanvasLayer.add_child(laboratory_logo_scene)
	laboratory_logo_scene.start()

func _on_shows_project_state_entered():
	if not movert_logo_scene:
		movert_logo_scene = movert_logo_packed_scene.instantiate()
		movert_logo_scene.connect("finished", _on_finished_scene)
	$CanvasLayer.add_child(movert_logo_scene)
	movert_logo_scene.start()

func _on_shows_idei_state_exited():
	$CanvasLayer.remove_child(idei_logo_scene)

func _on_shows_gel_state_exited():
	$CanvasLayer.remove_child(laboratory_logo_scene)

func _on_shows_project_state_exited():
	$CanvasLayer.remove_child(movert_logo_scene)

func _on_stop_background_state_entered():
	background_scene.stop()

func _on_tutorial_scene_state_entered():
	if not tutorial_scene:
		tutorial_scene = tutorial_packed_scene.instantiate()
#		tutorial_scene.connect("finished", _on_finished_scene)
	add_child(tutorial_scene)
