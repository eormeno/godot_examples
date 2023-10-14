extends VSplitContainer

@export var bg_color : Color = Color.BLACK

func _ready():
	get_tree().get_root().size_changed.connect(myfunc)

func myfunc():
	queue_redraw()

func _draw():
	var rec : Rect2 = self.get_rect()
	rec.position.x = 0
	rec.position.y = split_offset
	rec.size.y = 15
	draw_rect(rec, bg_color)

func _process(_delta):
	queue_redraw()
