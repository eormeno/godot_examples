extends Area2D

@export var pathNode : PathNode

var moving : bool = false
var target : Vector2
var speed : float = 200
var debug_label : Label
var target_path_node : PathNode
var previous_nodes : Array[PathNode]
var is_backing : bool
var _executor : Executor

func _ready():
	$AnimatedSprite2D.animation = "down"
	$AnimatedSprite2D.play()
	debug_label = $Label
	add_timer()
	place(0)
	
func set_executor(executor : Executor):
	_executor = executor
	add_child(_executor)
	
func add_timer():
	var timer := Timer.new()
	timer.wait_time = 1.0
	timer.one_shot = true
	timer.connect("timeout", _on_timer_timeout)
	add_child(timer)
	timer.start()

func _on_timer_timeout() -> void:
	pathNode.enable_destinations()
	pass
	
func check_destination(target_name : String) -> bool:
	return pathNode.get_destinations().has(target_name)
	
func place(number: int) -> bool:
	var ch = get_parent().find_child(str(number))
	var ret = ch != null
	if ret:
		pathNode = ch
		position = pathNode.position
		if _executor: _executor.event("placed")
	else:
		if _executor: _executor.error("No existe el lugar %s" % number)
	return ret
	
func move(target_name : String) -> bool:
	if target_name == "back" or target_name == "atras":
		var previous = previous_nodes.pop_front()
		if not previous:
			_executor.error("No puedo retroceder a %s" % target_name)
			return false
		target_path_node = previous
		is_backing = true
	else:
		target_path_node = pathNode.get_destination(target_name)
		if not target_path_node:
			_executor.error("No puedo moverme a %s" % target_name)
			return false
		is_backing = false
	target = target_path_node.position
	moving = true
	return true
	
func _process(delta):
	if debug_label.visible:
		debug_label.text = str(position - target)
	if not moving:
		return
	position = position.move_toward(target, delta * speed)
	var dif = position - target
	if dif.is_equal_approx(Vector2.ZERO):
		moving = false
		turn_back_node(false)
		if not is_backing:
			previous_nodes.push_front(pathNode)
		pathNode.disable_destinations()
		pathNode = target_path_node
		pathNode.enable_destinations()
		turn_back_node(true)
		_executor.event("arrived")

func turn_back_node(on : bool):
	if not previous_nodes.is_empty():
		var back_path_node : PathNode = previous_nodes.front()
		back_path_node.set_as_back(on)
