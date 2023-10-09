extends Tree

@export var folder_icon : Texture2D
@export var document_icon : Texture2D

var storage_resource : Resource
var storage : Dictionary = {}
var root : TreeItem

func _ready():
	storage_resource = load("res://iso_board/storage.json")
	storage = load_storage(storage_resource)
	if !storage:
		printerr("Storage config file not defined")
		return
#	print(JSON.stringify(storage, '\t'))
	root = add_elements(storage)
	add_timer()
	
func add_timer():
	var timer := Timer.new()
	timer.wait_time = 1.0
	timer.one_shot = true
	timer.connect("timeout", _on_timer_timeout)
	add_child(timer)
	timer.start()

func _on_timer_timeout() -> void:
	root.select(0)
	pass

func add_elements(item: Dictionary, item_name : String = "/", parent_item : TreeItem = null):
	var icon : Texture2D = folder_icon if item.type == "folder" else document_icon
	if !parent_item: parent_item = create_item()
	parent_item.set_text(0, item_name)
	parent_item.set_icon(0, icon)
	parent_item.set_metadata(0, item.type)
	if item.type == "script":
		pass
	for item_key_name in item:
		if item_key_name == "type": continue
		var child_item : TreeItem = create_item(parent_item)
		add_elements(item[item_key_name], item_key_name, child_item)
	return parent_item

func load_storage(resource : Resource):
	var ret : Dictionary = {}
	if not resource or not FileAccess.file_exists(resource.resource_path):
		return ret
	var file = FileAccess.open(resource.resource_path, FileAccess.READ)
	ret = JSON.parse_string(file.get_as_text())
	return ret

func load_script(script_name : String):
	var resource_path = storage. storage_resource.resource_name
