extends Control
class_name BaseUI

signal finished(state_name, exit_name)
var state_name : String
var tween : Tween

func _ready():
	tween = self.create_tween()
	self.modulate.a = 0
	
func fade_in():
	tween.tween_property(self, "modulate:a", 1, 0.5).set_trans(Tween.TRANS_LINEAR)
	tween.tween_interval(2)
	tween.tween_property(self, "modulate:a", 0, 0.5).set_trans(Tween.TRANS_LINEAR)
	tween.tween_callback(notify_fade_in_finished)
	
func notify_fade_in_finished():
	finished.emit(state_name, "next")
