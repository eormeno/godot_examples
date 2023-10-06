extends Control

func _ready():
	$VideoStreamPlayer.play()

func _on_video_stream_player_finished():
	$VideoStreamPlayer.play()
