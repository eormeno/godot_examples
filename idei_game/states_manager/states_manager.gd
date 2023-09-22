class_name StateManager extends Node

var managed_scene : Node
var fem_dict : Dictionary

var is_changing_state : bool
var running_states_names : Array[String] = []

func _init(scene : Node, fem_file_name : String = "initial.fem"):
	managed_scene = scene
	fem_dict = load_states(fem_file_name)
	running_states_names.append_array(fem_dict._init_.exits)
	managed_scene.add_child(self)

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
		if key == "_init_":
			continue
		states_dict[key]['running_method'] = null
		states_dict[key]['started'] = false

func get_scene_path():
	var root_scene = managed_scene.get_tree().get_current_scene()
	if not root_scene:
		printerr("No root scene.")
		return null
	var root_scene_file_path = root_scene.scene_file_path
	if not root_scene_file_path:
		printerr("Scene does not have an associated file.")
		return null
	return root_scene_file_path.get_base_dir()
	
func _process(delta):
	run_current_state(delta)
	
func state_exit(other_state : String):
	var states_names_to_remove = []
	var states_names_to_add = []
	for state_name in running_states_names:
		var current_state = fem_dict[state_name]
		var current_state_exits = current_state.exits
		if not current_state_exits.has(state_name):
			continue
		if state_name == other_state:
			continue
		current_state.running_method = null
		current_state.started = false
		run_state_end_callback(state_name)
		states_names_to_remove.append(state_name)
		states_names_to_add.append(other_state)
	for to_remove in states_names_to_remove:
		running_states_names.erase(to_remove)
	for to_add in states_names_to_add:
		running_states_names.append(to_add)
	pass

func run_current_state(delta):
	for state_name in running_states_names:
		var current_state = fem_dict[state_name]
		var running_method = current_state.get("running_method")
		if running_method:
			managed_scene.call(running_method, delta)
			continue
		run_state_start_callback(state_name)
		run_state_callback(state_name, delta)

func run_state_start_callback(state_name : String):
	var current_state = fem_dict[state_name]
	if current_state.started:
		return
	var starting_callback_name = 'start_' + state_name
	if not managed_scene.has_method(starting_callback_name):
		return
	managed_scene.call(starting_callback_name)
	current_state.started = true
	print('started ', starting_callback_name)

func run_state_callback(state_name : String, delta):
	var current_state = fem_dict[state_name]
	var state_callback_name = "do_" + state_name
	if not managed_scene.has_method(state_callback_name):
		return
	print('calling ', state_callback_name)
	managed_scene.call(state_callback_name, delta)
	current_state.running_method = state_callback_name

func run_state_end_callback(state_name : String):
	var end_callback_name = 'end_' + state_name
	if not managed_scene.has_method(end_callback_name):
		return
	managed_scene.call(end_callback_name)
	print('called ', end_callback_name)
	
func current_states_str(arr: Array = running_states_names, sep : String = ","):
	var ret = ""
	for element in arr:
		ret += element + sep
	ret = ret.erase(ret.length() - sep.length(), sep.length())
	return ret
