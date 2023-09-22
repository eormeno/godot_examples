class_name StateManager extends Node

var current : Node
var states : Dictionary

var is_changing_state : bool
var current_state_name : String
var current_state : Dictionary

func _init(scene : Node, states_file_name : String = "states"):
	current = scene
	states = load_states(states_file_name)
	current_state_name = states['start']
	current_state = states[current_state_name]
	current.add_child(self)

func load_states(states_file_name : String):
	var scene_path = get_scene_path()
	if not scene_path:
		printerr("Scene path could not be read")
		return null
	var states_full_path = scene_path + '/' + states_file_name + ".json"
	if not FileAccess.file_exists(states_full_path):
		printerr("State file: ", states_full_path, " does not exists.")
		return
	var file = FileAccess.open(states_full_path, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	reset_states_values(data)
	return data
	
func reset_states_values(states_dict : Dictionary):
	for key in states_dict.keys():
		if key == "start":
			continue
		states_dict[key]['running_method'] = null
		states_dict[key]['started'] = false

func get_scene_path():
	var root_scene = current.get_tree().get_current_scene()
	if not root_scene:
		printerr("No root scene.")
		return null
	var root_scene_file_path = root_scene.scene_file_path
	if not root_scene_file_path:
		printerr("Scene does not have an associated file.")
		return null
	return root_scene_file_path.get_base_dir()
	
func _process(delta):
	if not current:	return
	if is_changing_state: return
	
	run_current_state(delta)
	
func state_exit(label_name : String):
	var exit_state_name = current_state.get(label_name)
	if not exit_state_name:
		return
	if current_state_name == exit_state_name:
		return
	current_state.running_method = null
	current_state.started = false
	run_state_end_callback()
	current_state_name = exit_state_name
	current_state = states[exit_state_name]
	pass

func run_current_state(delta):
	var running_method = current_state.get("running_method")
	
	if running_method:
		current.call(running_method, delta)
		return
		
	is_changing_state = true
	run_state_start_callback()
	run_state_callback(delta)
	is_changing_state = false

func run_state_start_callback():
	if current_state.started:
		return
	var callback_method_name_suffix = current_state.get("start")
	if not callback_method_name_suffix:
		return
	var starting_callback_name = 'start_' + callback_method_name_suffix
	if not current.has_method(starting_callback_name):
		return
	current.call(starting_callback_name)
	current_state.started = true
	print('started ', starting_callback_name)

func run_state_callback(delta):
	var callback_method_name_suffix = current_state.get("start")
	if not callback_method_name_suffix:
		return
	if not current.has_method(callback_method_name_suffix):
		return
	print('calling ', callback_method_name_suffix)
	current.call(callback_method_name_suffix, delta)
	current_state['running_method'] = callback_method_name_suffix

func run_state_end_callback():
	var callback_method_name_suffix = current_state.get("start")
	if not callback_method_name_suffix:
		return
	var end_callback_name = 'end_' + callback_method_name_suffix
	if not current.has_method(end_callback_name):
		return
	current.call(end_callback_name)
	print('called ', end_callback_name)
