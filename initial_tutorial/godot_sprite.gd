extends Sprite2D

var speed = 400
var angular_speed = PI
var reduction_rate = 0.012  # Adjust this value (0 < x < 1) to control the reduction rate
var velocity = Vector2.ZERO

func _process(delta):
	var direction = 0
	if Input.is_action_pressed("ui_left"):
		direction = -1
	if Input.is_action_pressed("ui_right"):
		direction = 1

	rotation += angular_speed * direction * delta

	velocity = velocity.normalized() * velocity.length() * reduction_rate ** delta

	if Input.is_action_pressed("ui_up"):
		velocity = Vector2.UP.rotated(rotation) * speed

	position += velocity * delta
