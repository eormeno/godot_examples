class_name UserData extends Node

const SAVE_PATH = "user://user_data.json"

var user_data_dict : Dictionary = {}
var autosave_timeout : float = 1
var autosave_timer : float = 0
var unsaved_changes : bool = false

func _ready():
	user_data_dict = load_user_data()

func set_data(key : String, value : Variant):
	user_data_dict[key] = value
	unsaved_changes = true
	
func get_data(key : String, default : Variant = {}):
	if not user_data_dict.has(key):
		user_data_dict[key] = default
	
func _process(delta):
	autosave_timer += delta
	if autosave_timer > autosave_timeout:
		autosave_timer = 0
		if not unsaved_changes:
			return
		save_user_data()
		print("saved data")
		unsaved_changes = false
	
func load_user_data():
	if not FileAccess.file_exists(SAVE_PATH):
		user_data_dict = {}
		save_user_data()
	var file = FileAccess.open(SAVE_PATH, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	return data

func save_user_data():
	var file = FileAccess.open(SAVE_PATH, FileAccess.WRITE)
	file.store_line(JSON.stringify(user_data_dict))
