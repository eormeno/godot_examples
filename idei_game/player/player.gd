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

func _ready():
	global_signals.connect("execute_command", command_received)
	states_manager = StateManager.new(self)
	tilemap = get_parent()

func command_received(command: Signals.Move):
	var changed
	if command == Signals.Move.WALK:
		changed = states_manager.change_to_states([ "walking" ])
	if command == Signals.Move.LOOK_LEFT:
		changed = states_manager.change_to_states([ "looking_left" ])
	if command == Signals.Move.LOOK_RIGHT:
		changed = states_manager.change_to_states([ "looking_right" ])
	if command == Signals.Move.JUMP_UP:
		changed = states_manager.change_to_states([ "jumping" ])
	if command == Signals.Move.NO_MOVE:
		changed = states_manager.change_to_states([ "waiting" ])
	if command == Signals.Move.WAIT:
		changed = states_manager.change_to_states([ "waiting" ])
		
	if not changed:
		global_signals.notify_command_executed(command, Signals.Result.FAILED)

func start_waiting():
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	snap = true

func do_waiting(_delta):
	velocity = Vector2.ZERO

func start_looking_right():
	$AnimatedSprite2D.flip_h = false
	global_signals.notify_command_executed(Signals.Move.LOOK_RIGHT)

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
		@warning_ignore("integer_division")
		var posx = int(position.x / grid_size) * grid_size + (grid_size / 2)
		var posy = int(position.y / grid_size) * grid_size
		var pos = Vector2(posx, posy)
		state.linear_velocity = Vector2.ZERO
		state.transform = Transform2D(0, pos)
		snap = false
	if jump:
		apply_central_impulse(Vector2(0, -500))
		jump = false

func start_jumping():
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jump = true

func do_jumping(_delta):
	if linear_velocity.y > 0:
		states_manager.change_to_states([ "falling" ])

func do_falling(_delta):
	if linear_velocity.y == 0:
		snap = true
		states_manager.change_to_states([ "falled" ])

func start_falled():
	snap = true
	global_signals.notify_command_executed(Signals.Move.JUMP_UP)
	states_manager.change_to_states([ "waiting" ])

func start_looking_left():
	$AnimatedSprite2D.flip_h = true
	global_signals.notify_command_executed(Signals.Move.LOOK_LEFT)

func _process(_delta):
	var strret : String = ""
	var x_coord = int(position.x / 64)
	var y_coord = int(position.y / 64)
	strret += str(x_coord) + ", " + str(y_coord) + "\n"
	strret += states_manager.current_states_str()
	$Label.text = strret
