extends Tree

const SKIPPABLE_ATTRIBUTES : Array[String] = ["id", "type", "name", "content", "comment", "mime_type", "extension"]

enum PopupId {
	RENAME = 1,
	DELETE = 2,
	CREATE = 3,
}

@export var folder_icon : Texture2D
@export var document_icon : Texture2D

var root : TreeItem
var popup : PopupMenu
var _last_pos

func _ready():
	connection.get_user_resources(_on_user_resources_response)
	
func _on_user_resources_response(response):
	if response.has("errors"):
		printerr(response.errors)
		return
#	print(JSON.stringify(response.folder, '\t'))
	root = add_elements(response.folder)
	root.select(0)
	popup = PopupMenu.new()
	popup.add_item("Renombrar", PopupId.RENAME)
	popup.add_item("Nuevo", PopupId.CREATE)
	popup.connect("id_pressed", _menu_pressed)
	add_child(popup)

func _menu_pressed(id):
	if id == PopupId.RENAME:
		var item : TreeItem = get_selected()
		item.set_editable(0, true)

func _input(event):
	if !has_focus(): return
	if event is InputEventMouseButton and event.is_pressed() and event.button_index == MOUSE_BUTTON_RIGHT:
		_last_pos = get_global_mouse_position()
		popup.popup(Rect2(_last_pos.x, _last_pos.y, popup.size.x, popup.size.y))

func add_elements(item: Dictionary, item_name : String = "/", parent_item : TreeItem = null):
	var icon : Texture2D = folder_icon if item.type == "folder" else document_icon
	if !parent_item: parent_item = create_item()
	parent_item.set_text(0, item_name)
	parent_item.set_icon(0, icon)
	parent_item.set_metadata(0, item)
	if item.has("comment"):	parent_item.set_tooltip_text(0, item.comment)
#	parent_item.set_editable(0, true)
		
	for item_key_name in item:
		if SKIPPABLE_ATTRIBUTES.has(item_key_name): continue
		var child_item : TreeItem = create_item(parent_item)
		add_elements(item[item_key_name], item_key_name, child_item)
	return parent_item
	
func get_full_path(item : TreeItem):
	var ret = ""
	if item.get_metadata(0).type == "folder":
		ret = item.get_text(0)
	var p = item.get_parent()
	while p:
		ret = p.get_text(0) + ret
		p = p.get_parent()
	return ret
