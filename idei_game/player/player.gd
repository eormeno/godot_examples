class_name Player extends StateManaged

const G : float = 980

@export var speed = 200
@export var jump_speed = 500
@export var jump_height = 100
@export var states_file : Resource
@export var debug_label : Label
@export var floor_raycat : RayCast2D

var states : Dictionary
var velocity : Vector2 = Vector2.ZERO
var starting_point = 0

func _ready():
	super._config(states_file, floor_raycat, debug_label)

func start_waiting(_request):
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()

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
		velocity = velocity.normalized() * _delta * speed
	
	position += velocity
	if abs(position.x - starting_point) > grid_size:
		position = snap(position)
		if not request.untracked:
			request.success.call("I did it!")
		global_signals.send_untracked_request("wait")
		
var jumping_time : float
var jumping_initial_velocity : float = 20.0
var initial_height : float

func start_jumping(_request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jumping_time = 0.0
	initial_height = position.y

func do_jumping(_delta, _request):
	jumping_time += _delta
	var y : float = initial_height - jumping_initial_velocity * jumping_time + 0.5 * G * pow( jumping_time, 2.0 )
	position.y = y
	pass

var height : float
var falling_duration : float
var falling_time : float
var initial_y : float
var dif : float

func start_falling(_request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	initial_y = position.y
	height = (floor_collision_point.y - initial_y)
	dif = initial_y - height
	falling_duration = sqrt(2.0 * ((height + dif) / G))
	falling_time = 0

func do_falling(delta, _request):
	if falling_time < falling_duration:
		var new_y = height + 0.5 * G * pow( falling_time, 2.0 )
		position.y = new_y
	else:
		position = floor_collision_point
		printerr(falling_time - delta, " ", falling_duration)
		global_signals.send_untracked_request("on_floor")
		global_signals.send_untracked_request("wait")
	falling_time += delta
	pass

func start_on_floor(_request):
	global_signals.send_untracked_request("wait")

func _process(delta):
	super._process(delta)
	var strret : String = ""
	strret += current_states_str()
	$Label.text = strret
