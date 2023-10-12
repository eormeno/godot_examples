extends Control

signal connected
signal disconnected

const PING_URL:String = "http://127.0.0.1:8000/api/ping"

func _ready():
	$Timer.timeout.connect(_on_timeout)
	$Timer.start()
	$HTTPRequest.request_completed.connect(_on_request_completed)

func _on_timeout():
	$HTTPRequest.request(PING_URL)

func _on_request_completed(result, response_code, headers, body):
	var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
	if json.has("message") and json.message == "pong":
		emit_signal("connected")
		return
	emit_signal("disconnected")
