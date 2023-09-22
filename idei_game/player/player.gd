extends Area2D

@export var speed = 200
var screen_size
var states : Dictionary
var states_manager : StateManager
var velocity : Vector2 = Vector2.ZERO

func _ready():
	$InputProcesser.connect("movement", movement_signal_received)
	states_manager = StateManager.new(self)
	screen_size = get_viewport_rect().size
	position = screen_size / 2

func movement_signal_received(movement):
	if movement == InputProcesser.Move.RIGHT:
		states_manager.change_to_states([ "looking_right", "walking" ])
	if movement == InputProcesser.Move.LEFT:
		states_manager.change_to_states([ "looking_left", "walking" ])
	if movement == InputProcesser.Move.NONE:
		states_manager.change_to_states([ "waiting" ])
	if movement == InputProcesser.Move.JUMP:
		states_manager.change_to_states([ "jumping" ])
	pass

func start_waiting():
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	
func do_waiting(_delta):
	velocity = Vector2.ZERO

func start_looking_right():
	$AnimatedSprite2D.flip_h = false
	
func start_walking():
	speed = 200
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()
	
func do_walking(delta):
	velocity = Vector2.ZERO
	var dir : int = -1 if $AnimatedSprite2D.flip_h else 1
	velocity.x += dir
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)

var jumping_height = 0

func start_jumping():
	$AnimatedSprite2D.animation = "jump"
	$AnimatedSprite2D.play()
	jumping_height = position.y

func do_jumping(delta):
	velocity = Vector2.ZERO
	velocity.y -= 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * 500
	position += velocity * delta
	if abs(jumping_height - position.y) > 100:
		states_manager.change_to_states([ "falling" ])
		
func do_falling(delta):
	velocity = Vector2.ZERO
	velocity.y += 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * 500
	position += velocity * delta
	if abs(jumping_height - position.y) < 10:
		position.y = jumping_height
		states_manager.change_to_states([ "falled" ])
	
func looking_right(delta):
	velocity = Vector2.ZERO
	velocity.x += 1
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
	
func start_looking_left():
	$AnimatedSprite2D.flip_h = true

func looking_left(delta):
	velocity = Vector2.ZERO
	velocity.x += -1
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
	
func _process(_delta):
	$Label.text = states_manager.current_states_str()
	
func _processa(delta):
	velocity = Vector2.ZERO
	if Input.is_action_pressed("ui_right"):
		velocity.x += 1
	if Input.is_action_pressed("ui_left"):
		velocity.x -= 1
	if Input.is_action_pressed("ui_down"):
		velocity.y += 1
	if Input.is_action_pressed("ui_up"):
		velocity.y -= 1
		
	if Input.is_action_pressed("ui_page_up"):
		$AnimatedSprite2D.animation = "jump"
		$AnimatedSprite2D.play()

	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	
	if velocity.x != 0:
		$AnimatedSprite2D.animation = "run"
		$AnimatedSprite2D.flip_h = velocity.x < 0
		$AnimatedSprite2D.play()
		
	if velocity.y != 0:
		$AnimatedSprite2D.animation = "ladder"
		$AnimatedSprite2D.play()
	
	if velocity == Vector2.ZERO:
		$AnimatedSprite2D.animation = "idle"
		$AnimatedSprite2D.play()

	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
