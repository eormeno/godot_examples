class_name Player extends Node2D

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

	dif = initial_y - height
	falling_duration = sqrt(2.0 * ((height + dif) / G))
	falling_time = 0

func do_falling(delta, _request):
	if falling_time < falling_duration:
		var new_y = height + 0.5 * G * pow( falling_time, 2.0 )
		position.y = new_y
	else:
		printerr(falling_time - delta, " ", falling_duration)
	falling_time += delta
	pass

func start_on_floor(_request):
	pass
