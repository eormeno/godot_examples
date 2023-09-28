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

func start_waiting():
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	snap = true

func do_waiting(_delta):
	velocity = Vector2.ZERO

func start_looking_right():
	$AnimatedSprite2D.flip_h = false
	
func start_looking_left():
	$AnimatedSprite2D.flip_h = true

func start_walking():
	speed = 200
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()
	starting_point = position.x

func do_walking(delta):
	velocity = Vector2.ZERO
	var dir : int = -1 if $AnimatedSprite2D.flip_h else 1
	velocity.x += dir
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	var collision = move_and_collide(velocity * delta)
	if collision:
		print("colisiona")
		global_signals.notify_command_executed(Signals.Move.WALK, Signals.Result.FAILED)
		states_manager.change_to_states([ "waiting" ])
	
	if abs(position.x - starting_point) > grid_size:
		snap = true
		global_signals.notify_command_executed(Signals.Move.WALK, Signals.Result.SUCCESSFULLY)
		states_manager.change_to_states([ "waiting" ])

func _integrate_forces(state):
	if snap:
		snap = false
		@warning_ignore("integer_division")
		var posx = int(position.x / grid_size) * grid_size + (grid_size / 2)
		var posy = int(position.y / grid_size) * grid_size
		var pos = Vector2(posx, posy)
		state.linear_velocity = Vector2.ZERO
		state.transform = Transform2D(0, pos)

func start_jumping():
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jump = true
	
func _physics_process(_delta):
	if jump:
		jump = false
		apply_central_impulse(Vector2(0, -500))

	if linear_velocity.y > 0:
		if not floor_raycast.is_colliding():
			global_signals.send_untracked_request("falling")
	
	if linear_velocity.y < 0:
		global_signals.send_untracked_request("jumping")
		
	if abs(linear_velocity.y) < 0.01:
		if floor_raycast.is_colliding():
			global_signals.send_untracked_request("on_floor")

func do_jumping(_delta):
	if linear_velocity.y > 0:
		states_manager.change_to_states([ "falling" ])
		
func start_falling():
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()

func start_on_floor():
	snap = true
	global_signals.send_untracked_request("wait")

func _process(_delta):
	var strret : String = ""
	strret += states_manager.current_states_str()
	$Label.text = strret
