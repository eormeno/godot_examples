class_name BaseConnectionManager extends Control

signal connected
signal disconnected

const BASE_URL : String = "http://127.0.0.1:8000/api/"
const PING_URL:String = BASE_URL + "ping"

const PING_FREQUENCY : float = 2
const CONNECTION_TIMEOUT : float = 5

var timeout_counter : float = 0
var requests_queue : Dictionary = {}
var processing_request : bool

func _ready():
	$HTTPRequest.timeout = 2
	$HTTPRequest.request_completed.connect(_on_request_completed)
	emit_signal("disconnected")
	ping(_on_ping_response)
	
func _process(delta):
	timeout_counter += delta
	if timeout_counter > PING_FREQUENCY:
		timeout_counter = 0
		ping(_on_ping_response)
		return
	for rid in requests_queue.keys():
		var request_node = requests_queue[rid]
		if request_node.sent:
			if request_node.is_timeout():
				requests_queue.erase(rid)
				request_node.emit_timeout()
				continue
		if !processing_request:
			$HTTPRequest.request(request_node.url, request_node.headers, request_node.method, request_node.data)
			processing_request = true
			request_node.request_sent()
			break

func _on_request_completed(result : int, _response_code : int, headers : PackedStringArray, body : PackedByteArray):
	processing_request = false
	if result != 0:
		emit_signal("disconnected")
		return
	var req_id = find_in_header("Request-ID", headers)
	if req_id:
		var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
		if requests_queue.has(req_id):
			var request_node = requests_queue[req_id]
			requests_queue.erase(req_id)
			request_node.call_callback(json)

func enqueue_request(url: String, method: HTTPClient.Method, data : String = "", callback : Callable = Callable()):
	var request_node : ApiRequest = ApiRequest.new(url, method, data, callback)
	requests_queue[request_node.key] = request_node
	return request_node

func find_in_header(key: String, packed : PackedStringArray):
	for h in packed:
		if h.begins_with(key):
			return h.split(":")[1].strip_edges()
	return null

func ping(callback : Callable):
	enqueue_request(PING_URL, HTTPClient.METHOD_GET,"", callback)

func _on_ping_response(response):
	if response.has("pong") and response.pong:
		emit_signal("connected")
