class_name MemoryBlock extends Node
static var next_id : int = 0

var id : int :
	get: return id
var stack : Array = []
var heap: Dictionary = {}
var regs: Array = [4]
	
func _init():
	next_id += 1
	id = next_id
	for i in range(regs.size()):
		regs[i] = 0
	
func set_reg(reg: int, data, icl: int = 0) -> void:
	if icl != 0:
		print("%s set_reg(%s, %s)" % [icl, reg, data])
	if data is float:
		data = round(float(data))
	regs[reg] = data

func get_reg(reg: int, icl: int = 0):
	if icl != 0:
		print("%s get_reg(%s)" % [icl, reg])
	if not regs.has(reg):
		push_error("Register %s does not exist." % reg)
	return regs[reg]

func set_heap(id: String, data) -> void:
	heap[id] = data

func get_heap(id: String):
	return heap[id]

func has(id: String) -> bool:
	return heap.has(id)
