class_name BotCommandFactory extends Node

var commands_config_dict : Dictionary
var loaded_scenes_dict : Dictionary
static var _instance : BotCommandFactory
	
static func instance():
	if not _instance:
		_instance = BotCommandFactory.new()
	return _instance
	
func _init():
	commands_config_dict = parse_commands_config_file()
	
func list():
	for command_name in commands_config_dict.commands.keys():
		print(command_name)

func create(command_name:String, instantiable : bool = true):
	if not commands_config_dict.commands.has(command_name):
		printerr("Undefined command " + command_name + ".")
		return null
	var command_scene = get_command_scene("command")
	if not command_scene:
		printerr("Command scene of " + command_name + " not found.")
		return
	var new_cmd = command_scene.instantiate()
	new_cmd.on_click_instantiate = instantiable
	new_cmd.set_info(commands_config_dict.commands[command_name])
	return new_cmd

func create_available():
	var ret : Array[Node2D] = []
	for command_name in commands_config_dict.commands.keys():
		var inst = create(command_name)
		if not inst:
			continue
		ret.append(inst)
	return ret

func parse_commands_config_file():
	var commands_config_file = get_current_folder()  + "/bot_commands.json"
	if not FileAccess.file_exists(commands_config_file):
		printerr("Commands config file: ", commands_config_file, " does not exists.")
		return
	var file = FileAccess.open(commands_config_file, FileAccess.READ)
	var data = JSON.parse_string(file.get_as_text())
	return data
	
func get_current_folder():
	return self.get_script().get_path().get_base_dir()

func get_command_scene(command_name : String):
	if loaded_scenes_dict.has(command_name):
		return loaded_scenes_dict[command_name]
	var scene_full_path = get_current_folder() + "/" + command_name + ".tscn"
	if not ResourceLoader.exists(scene_full_path):
		return null
	var loaded_scene_resource = ResourceLoader.load(scene_full_path)	
	loaded_scenes_dict[command_name] = loaded_scene_resource
	return loaded_scene_resource
