extends Area2D


# Called when the node enters the scene tree for the first time.
func _ready():
	$AnimatedSprite2D.animation = "down"
	$AnimatedSprite2D.play()
	pass
