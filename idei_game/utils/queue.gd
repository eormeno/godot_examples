class_name Queue extends Node

var queue = []
var max_queue_size = 1000

# Add an item to the queue if it has not reached its maximum capacity
func add_to_queue(item):
	if len(queue) < max_queue_size:
		queue.push_back(item)

# Removes the front item from the queue and returns whether or not the queue was empty
func finish_queue_front():
	var ret = queue.pop_front()	
	return ret
