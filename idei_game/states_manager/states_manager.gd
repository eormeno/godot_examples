class_name StateManaged extends Area2D

const grid_size : float = 64.0
const ignore_keys : Array[String] = [ "_init_", "_finish_", "_signals_" ]
var fem_dict : Dictionary

var is_changing_state : bool
var running_states_names : Array[String] = []
var running_states_names_string = ""
var requests_queue : Queue = Queue.new()
var _floor_raycast : RayCast2D
var _debug_label : Label
var floor_collision_point : Vector2 = Vector2.ZERO

func _config(resource : Resource, raycast : RayCast2D, label : Label = null,):
	fem_dict = load_states(resource.resource_path)
	if not fem_dict:
		printerr("States file property is not configured.")
		return
	if not raycast:
		printerr("Floor raycast property is not configured.")
		return
	_floor_raycast = raycast
	_debug_label = label

	reset()
	global_signals.connect("request", request_received)
	
func is_in_state(state_name : String) -> bool:
	return running_states_names.has(state_name)

func snap(vector : Vector2):
	vector.x = int(vector.x / grid_size) * grid_size + grid_size / 2
	vector.y = int(vector.y / grid_size) * grid_size
	return vector

func _draw():
	draw_circle(floor_collision_point,2,Color.ROYAL_BLUE)

func do_on_floor_testing(_delta):
	if _floor_raycast.is_colliding():
		floor_collision_point = snap(_floor_raycast.get_collision_point())
		if floor_collision_point.y - position.y < 5:
			set_state("on_floor")
		else:
			set_state("on_air")

func request_received(request : Dictionary):
	var error_callback : Callable = Callable(request.error)
	if not fem_dict["_signals_"].has(request.signal_name):
		if error_callback:
			error_callback.call("undefined signal name: " + request.signal_name)
		return
	var signal_states : Array[String] = fem_dict["_signals_"][request.signal_name]
	var unfullfilled_conditions = {}
	request["signal_states"] = signal_states
	for state_name in signal_states:
		var state_conditions = fem_dict[state_name]["conditions"]
		for condition in state_conditions:
			if not running_states_names.has(condition):
				if not unfullfilled_conditions.has(state_name):
					unfullfilled_conditions[state_name] = []
				unfullfilled_conditions[state_name].append(condition)
	if not unfullfilled_conditions.is_empty():
		var errors = JSON.stringify(unfullfilled_conditions)
		if error_callback:
			error_callback.call("'" + request.signal_name + "' requires conditions: " + errors)
		return
	enqueue_request(request)
	pass
	
func reset():
	is_changing_state = false
	running_states_names.clear()
	reset_states_values(fem_dict)
	running_states_names.append_array(fem_dict._init_.exits)
	
func load_states(states_file : String = ""):
	if not states_file:
		printerr("States file dont configured in Resource property")
		return {}
	var states_full_path = states_file
	if not FileAccess.file_exists(states_full_path):
		printerr("State file: ", states_full_path, " does not exists.")
		return
	var file = FileAccess.open(states_full_path, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	return data
	
func reset_states_values(states_dict : Dictionary):
	states_dict["_signals_"] = {}
	for state_name in states_dict.keys():
		if ignore_keys.has(state_name):
			continue
		states_dict[state_name]["name"] = state_name
		states_dict[state_name]['request'] = null
		states_dict[state_name]['running_method'] = null
		states_dict[state_name]['started'] = false
		if not states_dict[state_name].has("exits"):
			states_dict[state_name]["exits"] = []
		if not states_dict[state_name].has("signal"):
			states_dict[state_name]["signal"] = ""
		add_signal(states_dict, state_name, states_dict[state_name]["signal"])
		if not states_dict[state_name].has("conditions"):
			states_dict[state_name]["conditions"] = []

func add_signal(states_dict : Dictionary, state_name : String, signal_name : String):
	if not signal_name or signal_name.length() == 0:
		return
	if not states_dict["_signals_"].has(signal_name):
		var empty_string_array : Array[String] = []
		states_dict["_signals_"][signal_name] = empty_string_array
	states_dict["_signals_"][signal_name].append(state_name)

func _process(delta):
	do_on_floor_testing(delta)
	do_should_fall_test(delta)
	var next_request = requests_queue.finish_queue_front()
	if next_request:
		process_request(next_request)
	run_current_states(delta)

func do_should_fall_test(_delta):
	if is_in_state("on_air"):
		set_state("falling")

func set_state(state: String) -> void:
	if is_in_state(state):
		return
	set_states([state])

func set_states(states : Array[String] = []) -> void:
	var changes = _change_to_states(states)
	update_states(changes)

func process_request(request : Dictionary):
	var changing_states : Dictionary = _change_to_states(request.signal_states)
	update_states(changing_states, request)

func enqueue_request(request : Dictionary):
	requests_queue.add_to_queue(request)

func _change_to_states(states : Array[String] = []) -> Dictionary:
	is_changing_state = true
	var result = {
		added = [],
		removed = []
	}
	for other_state in states:
		for state_name in running_states_names:
			var current_state = fem_dict[state_name]
			var current_state_exits = current_state.exits
			if state_name == other_state:
				continue
			if current_state_exits.has(other_state):
				current_state.running_method = null
				current_state.started = false
				run_state_end_callback(current_state)
				result.removed.append(state_name)
			if not result.added.has(other_state):
				result.added.append(other_state)
	return result
	
func update_states(states_changes : Dictionary, source_request : Dictionary = {}):
	for to_remove in states_changes.removed:
		running_states_names.erase(to_remove)
	for to_add in states_changes.added:
		if not running_states_names.has(to_add):
			if source_request:
				fem_dict[to_add].request = source_request
			running_states_names.append(to_add)
	running_states_names_string = ""

func run_current_states(delta):
	for state_name in running_states_names:
		var current_state = fem_dict[state_name]
		var running_method = current_state.running_method
		if running_method:
			call(running_method, delta, current_state.request)
			continue
		run_state_start_callback(current_state)
		run_state_callback(current_state, delta)

func run_state_start_callback(current_state):
	if current_state.started:
		return
	var starting_callback_name = 'start_' + current_state.name
	if not has_method(starting_callback_name):
		return
	call(starting_callback_name, current_state.request)
	current_state.started = true
	print('started ', starting_callback_name)

func run_state_callback(current_state, delta):
	var state_callback_name = "do_" + current_state.name
	if not has_method(state_callback_name):
		return
	print('calling ', state_callback_name)
	call(state_callback_name, delta, current_state.request)
	current_state.running_method = state_callback_name

func run_state_end_callback(current_state : Dictionary):
	var end_callback_name = 'end_' + current_state.name
	if not has_method(end_callback_name):
		return
	call(end_callback_name)
	print('called ', end_callback_name)

func current_states_str(arr: Array = running_states_names, sep : String = "\n"):
	if running_states_names_string.length() > 0:
		return running_states_names_string
	var ret = ""
	for element in arr:
		ret += element + sep
	ret = ret.erase(ret.length() - sep.length(), sep.length())
	running_states_names_string = ret
	return ret
