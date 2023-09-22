extends Area2D

@export var speed = 200
var screen_size
var states : Dictionary
var states_manager : StateManager
var velocity : Vector2 = Vector2.ZERO

func _ready():
	states_manager = StateManager.new(self)
	screen_size = get_viewport_rect().size
	
func start_waiting():
	$AnimatedSprite2D.animation = "idle"
	$AnimatedSprite2D.play()
	
func waiting(_delta):
	velocity = Vector2.ZERO
	check_input()

func start_looking_right():
	$AnimatedSprite2D.flip_h = false
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()
	
func looking_right(delta):
	velocity = Vector2.ZERO
	velocity.x += 1
	check_input()
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)
	
func start_looking_left():
	$AnimatedSprite2D.flip_h = true
	$AnimatedSprite2D.animation = "run"
	$AnimatedSprite2D.play()

func looking_left(delta):
	velocity = Vector2.ZERO
	velocity.x += -1
	check_input()
	if velocity.length() > 0:
		velocity = velocity.normalized() * speed
	position += velocity * delta
	position = position.clamp(Vector2.ZERO, screen_size)

func check_input():
	if Input.is_action_pressed("ui_right"):
		states_manager.state_exit("move_right")
		return
	if Input.is_action_pressed("ui_left"):
		states_manager.state_exit("move_left")
		return
	states_manager.state_exit("stop")

func _processa(delta):
	var velocity = Vector2.ZERO
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
