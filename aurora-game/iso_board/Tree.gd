extends Tree

const SKIPPABLE_ATTRIBUTES : Array[String] = ["id", "type", "file", "content", "mime", "ext"]

@export var folder_icon : Texture2D
@export var document_icon : Texture2D

var root : TreeItem

func _ready():
	connection.get_user_resources(_on_user_resources_response)
	
func _on_user_resources_response(response):
	if response.has("error"):
		printerr(response.error)
		return
#	print(JSON.stringify(response.folder, '\t'))
	root = add_elements(response.folder)
	root.select(0)

func add_elements(item: Dictionary, item_name : String = "/", parent_item : TreeItem = null):
	var icon : Texture2D = folder_icon if item.type == "folder" else document_icon
	if !parent_item: parent_item = create_item()
	parent_item.set_text(0, item_name)
	parent_item.set_icon(0, icon)
	parent_item.set_metadata(0, item)
		
	for item_key_name in item:
		if SKIPPABLE_ATTRIBUTES.has(item_key_name): continue
		var child_item : TreeItem = create_item(parent_item)
		add_elements(item[item_key_name], item_key_name, child_item)
	return parent_item

func load_script(script_name : String):
	var script_path = "res://iso_board/" + script_name
	var file = FileAccess.open(script_path, FileAccess.READ)
	return file.get_as_text()
	
func get_full_path(item : TreeItem):
	var ret = ""
	if item.get_metadata(0).type == "folder":
		ret = item.get_text(0)
	var p = item.get_parent()
	while p:
		ret = p.get_text(0) + ret
		p = p.get_parent()
	return ret