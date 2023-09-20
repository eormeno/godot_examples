extends VideoStreamPlayer

const STATES_FILE_PATH = "res://states.json"
var is_changing_state : bool
var previous_state_name : String
var current_state_name : String
var states : Dictionary

func _ready():
	states = load_states()
	current_state_name = states['start']
	run_state(current_state_name)
	
func _process(_delta):
	if is_changing_state:
		return
	if current_state_name == previous_state_name:
		return
	print (current_state_name)
	
	previous_state_name = current_state_name
	run_state(current_state_name)

func run_state(state_name : String):
	is_changing_state = true
	
	if state_name == "quit":
		get_tree().quit()
		return
		
	var state = states[state_name]
	if state['scene']:
		if states.has("loaded"):
			add_child(state["loaded"])
		else:
			var scene_full_path = "res://" + state['scene'] + ".tscn"
			if ResourceLoader.exists(scene_full_path):
				var loaded_scene_resource = ResourceLoader.load(scene_full_path)
				var scene = loaded_scene_resource.instantiate()
				scene.state_name = current_state_name
				scene.finished.connect(on_changed_state)
				state['loaded'] = scene
				add_child(scene)
			else:
				printerr("Not found scene:", scene_full_path)
	else:
		printerr("Undefined scene for state ", state_name)
	is_changing_state = false

func on_changed_state(state_name : String, exit_name : String):
	remove_child(states[state_name]["loaded"])
	var new_state_name = states[state_name][exit_name]
	current_state_name = new_state_name

func load_states():
	if not FileAccess.file_exists(STATES_FILE_PATH):
		return
	var file = FileAccess.open(STATES_FILE_PATH, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	return data

func _on_finished():
	play()
