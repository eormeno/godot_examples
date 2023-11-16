class_name MemoryBlock extends Node
static var next_id : int = 0

var id : int :
	get: return id
var stack : Array = []
var heap: Dictionary = {}
var regs: Array = [null, null, null, null]
	
func _init():
	next_id += 1
	id = next_id
	for i in range(regs.size()):
		regs[i] = null
	
func set_reg(reg: int, data, icl: int = 0) -> void:
	if icl != 0:
		print("%s set_reg(%s, %s)" % [icl, reg, data])
	if data is float:
		data = float(data)
	regs[reg] = data

func get_reg(reg: int, icl: int = 0):
	if icl != 0:
		print("%s get_reg(%s)" % [icl, reg])
#	if not regs.has(reg):
#		push_error("Register %s does not exist." % reg)
	return regs[reg]

func set_heap(ident: String, data) -> void:
	heap[ident] = data

func get_heap(ident: String):
	return heap[ident]

func has(ident: String) -> bool:
	return heap.has(ident)
