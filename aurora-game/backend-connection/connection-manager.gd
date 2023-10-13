class_name ConnectionManager extends Control

signal connected
signal disconnected

const BASE_URL : String = "http://127.0.0.1:8000/api/"
const PING_URL:String = BASE_URL + "ping"
const LOGIN_URL:String =  BASE_URL + "login"
const RESOURCES_URL:String =  BASE_URL + "resources"

const CONNECTION_TIMEOUT : float = 2
var timeout_counter : float = 0

static var request_id : int = 0
var requests_queue : Dictionary = {}

func _ready():
	$HTTPRequest.timeout = 2
	$HTTPRequest.request_completed.connect(_on_request_completed)
	emit_signal("disconnected")
	ping(_on_ping_response)
	
func _process(delta):
	timeout_counter += delta
	if timeout_counter > CONNECTION_TIMEOUT:
		timeout_counter = 0
		$HTTPRequest.cancel_request()
		ping(_on_ping_response)
		return
	for rid in requests_queue.keys():
		var request = requests_queue[rid]
		if request.sent:
			continue
		$HTTPRequest.request(request.url, request.headers, request.method, request.data)
		request.sent = true
		break

func _on_request_completed(result : int, _response_code : int, headers : PackedStringArray, body : PackedByteArray):
	if result != 0:
		emit_signal("disconnected")
		return
	var req_id = find_in_header("Request-ID", headers)
	if req_id:
		var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
		var request = requests_queue[req_id]
		var callback = request.callback
		requests_queue.erase(req_id)
		callback.call(json)

func ping(callback : Callable):
	put_request(PING_URL, HTTPClient.METHOD_GET,"", callback)
	
func _on_ping_response(response):
	if response.has("pong") and response.pong:
		emit_signal("connected")

func login(email : String, password : String, response : Callable):
	var json = JSON.stringify({ email = email, password = password })
	put_request(LOGIN_URL, HTTPClient.METHOD_POST, json, response)
	
func get_user_resources(callback : Callable):
	put_request(RESOURCES_URL, HTTPClient.METHOD_GET, "", callback)

func put_request(url: String, method: HTTPClient.Method, data : String = "", callback : Callable = Callable()):
	request_id += 1
	var request_key = str(request_id)
	var headers = [
		"Content-Type: application/json",
		"Request-ID: " + request_key,
		"Authorization: Bearer " + persist_user_data.get_data('token')
	]
	requests_queue[request_key] = {
		sent = false,
		url = url,
		headers = headers,
		method = method,
		data = data,
		callback = callback 
	}

func find_in_header(key: String, packed : PackedStringArray):
	for h in packed:
		if h.begins_with(key):
			return h.split(":")[1].strip_edges()
	return null
