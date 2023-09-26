extends Area2D

@export var speed = 200
@export var jump_speed = 500
@export var jump_height = 100
@export var resource: Resource
var screen_size
var states : Dictionary
var states_manager : StateManager
var velocity : Vector2 = Vector2.ZERO
var jumping_height = 0
var starting_point = 0
var tilemap : TileMap

func _ready():
	global_signals.connect("execute_command", command_received)
	states_manager = StateManager.new(self)
	screen_size = get_viewport_rect().size
	tilemap = get_parent()
	
func command_received(command: Signals.Move):
	if command == Signals.Move.WALK:
		states_manager.change_to_states([ "walking" ])
	if command == Signals.Move.LOOK_LEFT:
		states_manager.change_to_states([ "looking_left" ])
	if command == Signals.Move.LOOK_RIGHT:
		states_manager.change_to_states([ "looking_right" ])
	if command == Signals.Move.JUMP_UP:
		states_manager.change_to_states([ "jumping" ])
	if command == Signals.Move.NO_MOVE:
		states_manager.change_to_states([ "waiting" ])
	if command == Signals.Move.WAIT:
		states_manager.change_to_states([ "waiting" ])

func start_waiting():
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	
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
	position += velocity * delta
	if abs(position.x - starting_point) > 64:
		position.x = starting_point + dir * 64
		states_manager.change_to_states([ "waiting" ])
	position = position.clamp(Vector2.ZERO, screen_size)

func start_jumping():
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jumping_height = position.y

func do_jumping(delta):
	velocity = Vector2.ZERO
	velocity.y -= 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * jump_speed
	position += velocity * delta
	if abs(jumping_height - position.y) > jump_height:
		states_manager.change_to_states([ "falling" ])
		
func do_falling(delta):
	velocity = Vector2.ZERO
	velocity.y += 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * jump_speed
	position += velocity * delta
	if abs(jumping_height - position.y) < 10:
		position.y = jumping_height
		states_manager.change_to_states([ "falled" ])

func do_falled(_delta):
	global_signals.notify_command_executed(Signals.Move.JUMP_UP)
	states_manager.change_to_states([ "waiting" ])

func looking_right(delta):
	velocity = Vector2.ZERO
	velocity.x += 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
	
func start_looking_left():
	$AnimatedSprite2D.flip_h = true
	global_signals.notify_command_executed(Signals.Move.LOOK_LEFT)
	
func looking_left(delta):
	velocity = Vector2.ZERO
	velocity.x += -1
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
	
func _process(_delta):
	var x_coord = int(position.x / 64)
	var y_coord = int(position.y / 64)
	
#	$Label.text = states_manager.current_states_str()
	$Label.text = str(x_coord) + ", " + str(y_coord)
