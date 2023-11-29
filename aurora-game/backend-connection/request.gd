class_name ApiRequest extends Node
const RESPONSE_TIMEOUT : float = 30000
static var request_id : int = 0

signal completed(response:Dictionary)

var id : int :
	get: return id
var key : String :
	get: return key
var sent: bool = false :
	get: return sent
	set(value): sent = value
var time: float = 0.0 :
	set(value): time = value
var url: String = ""
var headers: Array[String] = []
var method = HTTPClient.METHOD_GET
var data : String = ""
var callback : Callable = Callable()

func _init(_url : String, _method : HTTPClient.Method, _data : String, _callback : Callable):
	request_id += 1
	id = request_id
	key = str(id)
	headers = [
		"Content-Type: application/json",
		"Request-ID: " + key,
		"Authorization: Bearer " + persist_user_data.get_data('token', "")
	]
	url = _url
	method = _method
	data = _data
	callback = _callback

func request_sent():
	sent = true
	time = Time.get_ticks_msec()

func is_timeout() -> bool:
	return (Time.get_ticks_msec() - time) > RESPONSE_TIMEOUT
	
func call_callback(response : Dictionary):
	response.url = url
	response.delay = Time.get_ticks_msec() - time
	if callback:
		callback.call(response)
	emit_signal("completed", response)
	self.queue_free()

func emit_timeout():
	call_callback({ errors = ["timeout"] })
