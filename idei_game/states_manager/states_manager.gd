class_name StateManager extends Node

static func load_states(scene : Node, states_file_name : String = "states"):
	var scene_path = get_scene_path(scene)
	if not scene_path:
		printerr("Scene path could not be read")
		return null
	var states_full_path = scene_path + '/' + states_file_name + ".json"
	if not FileAccess.file_exists(states_full_path):
		printerr("State file: ", states_full_path, " does not exists.")
		return
	var file = FileAccess.open(states_full_path, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	return data

static func get_scene_path(scene : Node):
	var root_scene = scene.get_tree().get_current_scene()
	if not root_scene:
		printerr("No root scene.")
		return null
	var root_scene_file_path = root_scene.scene_file_path
	if not root_scene_file_path:
		printerr("Scene does not have an associated file.")
		return null
	return root_scene_file_path.get_base_dir()
