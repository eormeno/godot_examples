extends Area2D

@export var pathNode : PathNode

var moving : bool = false
var target : Vector2
var speed : float = 200
var debug_label : Label
var target_path_node : PathNode
var previous_nodes : Array[PathNode]
var is_backing : bool

# Called when the node enters the scene tree for the first time.
func _ready():
	$AnimatedSprite2D.animation = "down"
	$AnimatedSprite2D.play()
	debug_label = $Label
	position = pathNode.position
	pass

func _on_board_2_send_code(code):
	var destinations : Array[String] = pathNode.get_destinations()
	for line in code:
		if destinations.has(line):
			set_target(line)
	pass
	
func set_target(target_name : String):
	if target_name == PathNode.BACK_COMMAND:
		var previous = previous_nodes.pop_front()
		if not previous:
			return
		target_path_node = previous
		is_backing = true
	else:
		target_path_node = pathNode.get_destination(target_name)
		is_backing = false
	target = target_path_node.position
	moving = true
	
func _process(delta):
	if debug_label.visible:
		debug_label.text = str(position - target)
		
	if not moving:
		return
	position = position.move_toward(target, delta * speed)
	var dif = position - target
	if dif.is_equal_approx(Vector2.ZERO):
		moving = false
		if not is_backing:
			previous_nodes.push_front(pathNode)
		pathNode = target_path_node	
