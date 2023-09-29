extends Area2D

@export var speed = 200
@export var jump_speed = 500
@export var jump_height = 100
@export var resource: Resource

var states : Dictionary
var states_manager : StateManager
var velocity : Vector2 = Vector2.ZERO
var starting_point = 0
var tilemap : TileMap
var snap : bool = false
var jump : bool = false
var grid_size = 64
var floor_raycast : RayCast2D

func _ready():
	floor_raycast = $floor_raycast
	states_manager = StateManager.new(self)
	tilemap = get_parent()

var floor_collision_point : Vector2 = Vector2.ZERO

func do_on_floor_testing(delta, _request):
	if floor_raycast.is_colliding():
		floor_collision_point = floor_raycast.get_collision_point()
		if abs(floor_collision_point.y - position.y) < 0.01:
			global_signals.send_untracked_request("on_floor")
		else:
			global_signals.send_untracked_request("falling")

func start_waiting(_request):
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	snap = true

func do_waiting(_delta, _request):
	velocity = Vector2.ZERO

func start_looking_right(request):
	$AnimatedSprite2D.flip_h = false
	if request and not request.untracked:
		request.success.call("finished")
	
func start_looking_left(request):
	$AnimatedSprite2D.flip_h = true
	if request and not request.untracked:
		request.success.call("finished")

func start_walking(_request):
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()
	starting_point = position.x

func do_walking(_delta, request):
	var dir : int = -1 if $AnimatedSprite2D.flip_h else 1
	velocity.x += dir
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	
	position += velocity
	if abs(position.x - starting_point) > grid_size:
		snap = true
		request.success.call("I did it!")
		global_signals.send_untracked_request("wait")

func start_jumping(_request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jump = true

func do_jumping(_delta, _request):
	pass

func start_falling(_request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	
func do_falling(delta, _request):
	pass

func start_on_floor(_request):
#	snap = true
	global_signals.send_untracked_request("wait")

func _process(_delta):
	var strret : String = ""
	strret += states_manager.current_states_str()
	$Label.text = strret
