extends Node2D

@export var states_file : Resource

var state_managed : State_Managed

func _ready():
	state_managed = State_Managed.new(self, states_file, $debug)
