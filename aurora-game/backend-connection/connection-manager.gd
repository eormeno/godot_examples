class_name ConnectionManager extends Control

signal connected
signal disconnected

const BASE_URL : String = "http://127.0.0.1:8000/api/"
const PING_URL:String = BASE_URL + "ping"

const CONNECTION_TIMEOUT : float = 2
var timeout_counter : float = 0

func _ready():
	$HTTPRequest.timeout = 2
	$HTTPRequest.request_completed.connect(_on_request_completed)
	$HTTPRequest.request(PING_URL)
	emit_signal("disconnected")
	
func _process(delta):
	timeout_counter += delta
	if timeout_counter > CONNECTION_TIMEOUT:
		timeout_counter = 0
		$HTTPRequest.cancel_request()
		$HTTPRequest.request(PING_URL)

func _on_request_completed(result, _response_code, _headers, body):
	if result != 0:
		emit_signal("disconnected")
		return
	var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
	if json.has("message") and json.message == "pong":
		emit_signal("connected")
		return
