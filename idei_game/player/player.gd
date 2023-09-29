extends RigidBody2D

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
	floor_raycast = $RayCast2D
	states_manager = StateManager.new(self)
	tilemap = get_parent()

func start_waiting(request):
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	snap = true

func do_waiting(_delta, request):
	velocity = Vector2.ZERO

func start_looking_right(request):
	$AnimatedSprite2D.flip_h = false
	if request and not request.untracked:
		request.success.call("finished")
	
func start_looking_left(request):
	$AnimatedSprite2D.flip_h = true
	if request and not request.untracked:
		request.success.call("finished")

func start_walking(request):
	speed = 200
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()
	starting_point = position.x

func do_walking(delta, request):
	velocity = Vector2.ZERO
	var dir : int = -1 if $AnimatedSprite2D.flip_h else 1
	velocity.x += dir
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	var collision = move_and_collide(velocity * delta)
	if collision:
		print("colisiona")
#		global_signals.notify_command_executed(Signals.Move.WALK, Signals.Result.FAILED)
		states_manager.change_to_states([ "waiting" ])
	
	if abs(position.x - starting_point) > grid_size:
		snap = true
		request.success.call("I did it!")
#		global_signals.notify_command_executed(Signals.Move.WALK, Signals.Result.SUCCESSFULLY)
		global_signals.send_untracked_request("wait")

func _integrate_forces(state):
	if snap:
		snap = false
		@warning_ignore("integer_division")
		var posx = int(position.x / grid_size) * grid_size + (grid_size / 2)
		var posy = int(position.y / grid_size) * grid_size
		var pos = Vector2(posx, posy)
		state.linear_velocity = Vector2.ZERO
		state.transform = Transform2D(0, pos)

func start_jumping(request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jump = true

var delay_timer = 0
var start_wait = false
var is_still_jumping = false

func do_jumping(delta, request):
	is_still_jumping = true
	delay_timer += delta
	if delay_timer > 1.5:
		delay_timer = 0
		snap = true
		request.success.call("I did it!")
		is_still_jumping = false
		global_signals.send_untracked_request("wait")

var previous_y = 0

func _physics_process(_delta):
	if jump:
		jump = false
		is_still_jumping = true
		apply_central_impulse(Vector2(0, -500))
		return
		
	if is_still_jumping:
		return
		
	var dif = position.y - previous_y
	
	if floor_raycast.is_colliding():
		if dif == 0:
			global_signals.send_untracked_request("on_floor")
	else:
		if dif > 0:
			global_signals.send_untracked_request("falling")
		elif dif < 0:
			global_signals.send_untracked_request("jumping")
	
	previous_y = position.y

#	if linear_velocity.y > 0:
#		if not floor_raycast.is_colliding():
#			global_signals.send_untracked_request("falling")
#
#	if linear_velocity.y < 0:
#		global_signals.send_untracked_request("jumping")
#
#	if abs(linear_velocity.y) < 0.01:
#		if floor_raycast.is_colliding():
#			global_signals.send_untracked_request("on_floor")

func start_falling(request):
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()

func start_on_floor(request):
#	snap = true
	global_signals.send_untracked_request("wait")

func _process(_delta):
	var strret : String = ""
	strret += states_manager.current_states_str()
	$Label.text = strret
