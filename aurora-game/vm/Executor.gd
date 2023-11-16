class_name Executor extends Node

var stack : Array
var call_stack : Array[MemoryBlock]
var compiled_code:Array = []
var _stop:bool = true
var _i = 0
var elapsed : float
var previous : float
var _sprite : Node
var _terminal : Terminal

func _init(sprite:Node, terminal : Terminal):
	_sprite = sprite
	_terminal = terminal
	reset()

func push_call_stack() -> void:
	call_stack.append(MemoryBlock.new())

func pop_call_stack() -> void:
#	print(JSON.stringify(get_block(), " "))
	call_stack.pop_back()

func get_block() -> MemoryBlock:
	return call_stack[call_stack.size() - 1]

func push(reg: int, data = null) -> void:
	if reg == -1:
		stack.append(data)
	else:
		stack.append(get_block().get_reg(reg))

func pop(reg: int, identificator = null) -> void:
	if stack.is_empty():
		push_error("Stack is empty.")
		return
	var popped_data = stack.pop_back()
	if identificator:
		get_block().set_heap(identificator, popped_data)
	else:
		get_block().set_reg(reg, popped_data)

func set_reg(reg: int, data, icl: int = 0) -> void:
	get_block().set_reg(reg, data, icl)

func get_reg(reg: int, _icl: int = 0):
	return get_block().get_reg(reg)

func set_heap(id: String, data) -> void:
	get_block().set_heap(id, data)

func get_heap(id: String):
	return get_block().get_heap(id)

func has(id: String) -> bool:
	return get_block().has(id)

func run(code: Array):
	compiled_code = code
	reset()
	_stop = false
	
func pause():
	_stop = true

func cont():
	_stop = false
	
func finish():
	reset()

func reset():
	_stop = true
	elapsed = 0.0
	previous = 0.0
	_i = 0
	call_stack.clear()
	push_call_stack()

func _process(delta):
	if _stop: return
	elapsed += delta
	_i = run_code(compiled_code, _i)
	_i += 1
	if _i >= compiled_code.size(): _stop = true

func run_code(code:Array, i:int):
	if i >= code.size(): return
	var cl = code[i]
	var line : int = int(cl[0])
	var op : String = cl[1].to_upper()
	var reg : int = int(cl[2])
	var data = cl[3]
	var aux = cl[4]
	var _lbl = cl[5]
	match op:
		"REG":
			set_reg(reg, data)
		"PSH":
			push(reg, data)
		"POP":
			pop(reg, data)
		"ADD":
			var left = get_reg(1)
			var right = get_reg(2)
			set_reg(reg, left + right)
		"SUB":
			var left = get_reg(1)
			var right = get_reg(2)
			set_reg(reg, left - right)
		"MUL":
			var left = get_reg(1)
			var right = get_reg(2)
			set_reg(reg, left * right)
		"DIV":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left / right)
		"MEM":
			if reg == -1:
				set_heap(data, aux)
			else:
				var result = get_reg(reg)
				set_heap(data, result)
		"GET":
			if not has(data):
				var res = "En línea %s, variable '%s' indefinida." % [line, data]
				_terminal.out(res, Terminal.ERROR)
				i = code.size() - 1
			else:
				var value = get_heap(data)
				set_reg(reg, value)
		"DELTA":
			if previous == 0.0: previous = elapsed
			var delta = elapsed - previous
			set_reg(reg, delta)
			previous = elapsed
		"EQL":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left == right)
		"NEQ":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left != right)
		"GRT":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left > right)
		"LST":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left < right)
		"GTE":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left >= right)
		"LTE":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left <= right)
		"LOR":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left or right)
		"AND":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, left and right)
		"NOT":
			var left = get_reg(1)
			set_reg(reg, not left)
		"CAT":
			var left = get_reg(1)
			var right =get_reg(2)
			set_reg(reg, str(left) + str(right))
		"OUT":
			var _str = str(get_reg(reg))
			_terminal.out(_str)
		"IFI":
			var condition = get_reg(0)
			if not condition:
				i = data - 1
		"JMP":
			var jump_to = data
			if reg != -1:
				jump_to = get_reg(reg)
			i = jump_to - 1
		"PSHCS":
			push_call_stack()
		"POPCS":
			pop_call_stack()
		"LCALL":
			i = data - 1
		"END":
			pop_call_stack()
	return i
