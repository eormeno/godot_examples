class_name Request extends Node

static var _auto_id : int = 0

var id : int = 0 :
	get: return id
var states : Array[String] = []

func _init(change_states : Array[String]):
	_auto_id += 1
	id = _auto_id
	states = change_states
