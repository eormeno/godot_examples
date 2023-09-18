extends Control
class_name BaseUI

var tween : Tween

func _ready():
	tween = self.create_tween()
	self.modulate.a = 0
	
func fade_in():
	tween.tween_property(self, "modulate:a", 1, 2).set_trans(Tween.TRANS_LINEAR)
	tween.tween_property(self, "modulate", Color.TRANSPARENT, 2).set_trans(Tween.TRANS_LINEAR)
