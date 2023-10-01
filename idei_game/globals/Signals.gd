class_name Signals extends Node

static var request_id : int = 0
signal request(request)

enum Result { SUCCESSFULLY, FAILED }

func build_async_request(signal_name : String, success_callback : Callable, error_callback : Callable):
	request_id += 1
	var request_data = {
		id = request_id,
		signal_name = signal_name,
		success = success_callback,
		error = error_callback,
		async = not success_callback and not error_callback,
		sync = success_callback or error_callback
	}
	return request_data

func build_request(signal_name : String):
	return build_async_request(signal_name, Callable(), Callable())

func send_request(signal_name : String, success_callback : Callable, error_callback : Callable):
	var request_data = build_async_request(signal_name, success_callback, error_callback)
	emit_signal("request", request_data)
	return request_data.id

func send_untracked_request(signal_name : String):
	return self.send_request(signal_name, Callable(), Callable())
