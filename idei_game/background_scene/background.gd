extends Node2D

const MOVEMENT_DURATION : float = 4
var pivot : Node2D
var sprite_background : Sprite2D
var sprite_background_size : Vector2
var screen_size : Vector2
var random_generator = RandomNumberGenerator.new()
var timer : float = 0
var destination : Vector2
var speed : float = 10.0
var tween : Tween


func _ready():
	pivot = find_child("pivot")
	sprite_background = find_child("sprite_background")
	sprite_background_size = sprite_background.texture.get_size()
	screen_size = get_viewport().size
	print(str(sprite_background_size))
	print(str(screen_size))
	pivot.position = get_random_point()
	tween = self.create_tween()
	destination = pivot.position
	tween.tween_property(pivot, "position", destination, 10)
	tween.play()

func get_random_point() -> Vector2:
	var point : Vector2 = Vector2(sprite_background_size.x - screen_size.x, sprite_background_size.y - screen_size.y)
	var random_x = random_generator.randi_range(0, point.x)
	var random_y = random_generator.randi_range(0, point.y)
	return Vector2(random_x + screen_size.x / 2, random_y + screen_size.y / 2)

func _process(delta : float):
	timer += delta
	if timer > MOVEMENT_DURATION:
		timer = 0
		destination = get_random_point()
		tween.kill()
		tween = self.create_tween()
		tween.tween_property(pivot, "position", destination, 10)
		tween.play()
