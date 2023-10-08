extends Tree

var storage_resource : Resource
var storage : Dictionary = {}
@export var folder_icon : Texture2D
@export var document_icon : Texture2D

func _ready():
	storage_resource = load("res://iso_board/storage.json")
	storage = load_storage(storage_resource)
	if !storage:
		printerr("Storage config file not defined")
		return
	print(JSON.stringify(storage, '\t'))
	var root = create_item()
	for key in storage:
		if key == "type":
			continue
		var folder = create_item(root)
		folder.set_text(0, key)
		for key2 in storage[key]:
			if key2 == "type":
				continue
			create_item(folder).set_text(0, key2)
		

func load_storage(resource : Resource):
	var ret : Dictionary = {}
	if not resource or not FileAccess.file_exists(resource.resource_path):
		return ret
	var file = FileAccess.open(resource.resource_path, FileAccess.READ)
	ret = JSON.parse_string(file.get_as_text())
	return ret
