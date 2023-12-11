class_name BaseConnectionManager extends Control

signal connected
signal disconnected

const LOCAL : String = "http://localhost"
const REMOTE : String = "https://damogame.com"
const BASE_API : String = "/api/"

const PING_FREQUENCY : float = 2
const CONNECTION_TIMEOUT : float = 30

var timeout_counter : float = 0
var requests_queue : Dictionary = {}
var processing_request : bool
var ping_answered : bool
var connected_to_host : bool

func _ready():
	$HTTPRequest.timeout = CONNECTION_TIMEOUT
	$HTTPRequest.request_completed.connect(_on_request_completed)
	emit_signal("disconnected")
	connected_to_host = false
	ping(_on_ping_response)
	
func get_base_url():
	var remote = persist_user_data.get_data("local", false)
	var base = REMOTE
	if !remote: base = LOCAL
	print(base)
	return base + BASE_API
	
func get_ping_url():
	return get_base_url() + "ping"
	
func _process(delta):
	timeout_counter += delta
	if timeout_counter > PING_FREQUENCY and ping_answered:
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
			processing_request = true
			$HTTPRequest.request(request_node.url, request_node.headers, request_node.method, request_node.data)
			request_node.request_sent()
			break

func _on_request_completed(result : int, _response_code : int, headers : PackedStringArray, body : PackedByteArray):
	if result != 0:
		emit_signal("disconnected")
		processing_request = false
		return
		
	var req_id = find_in_header("request-id", headers)
	if req_id:
		var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
		if requests_queue.has(req_id):
			var request_node = requests_queue[req_id]
			requests_queue.erase(req_id)
			request_node.call_callback(json)
	processing_request = false

func enqueue_request(url: String, method: HTTPClient.Method, data : String = "", callback : Callable = Callable()):
	var request_node : ApiRequest = ApiRequest.new(url, method, data, callback)
	requests_queue[request_node.key] = request_node
	return request_node

func find_in_header(key: String, packed : PackedStringArray):
	for h in packed:
		h = h.to_lower()
		if h.begins_with(key):
			return h.split(":")[1].strip_edges()
	return null

func ping(callback : Callable):
	ping_answered = false
	enqueue_request(get_ping_url(), HTTPClient.METHOD_GET,"", callback)

func _on_ping_response(response):
	ping_answered = true
	if response.has("pong") and response.pong:
		connected_to_host = true
		emit_signal("connected")
	else:
		connected_to_host = false
