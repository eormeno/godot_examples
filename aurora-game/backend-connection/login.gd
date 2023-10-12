extends CenterContainer

signal logged_user(user:Dictionary)

const PING_URL:String = "http://127.0.0.1:8000/api/ping"
const LOGIN_URL:String = "http://127.0.0.1:8000/api/login"

func _ready():
	ping.connected.connect(_on_connected)
	ping.disconnected.connect(_on_disconnected)
	%user.grab_focus()
	%user.text = persist_user_data.get_data("login.email", "")
	%password.text = persist_user_data.get_data("login.password", "")
	%LoginButton.pressed.connect(_on_login_button)
	$HTTPRequest.request_completed.connect(_on_request_completed)
	
func _on_login_button():
	var data = { email = %user.text, password = %password.text }
	var json = JSON.stringify(data)
	var headers = ["Content-Type: application/json"]
	$HTTPRequest.request(LOGIN_URL, headers, HTTPClient.METHOD_POST, json)

func _on_request_completed(_result, _response_code, _headers, body):
	var json : Dictionary = JSON.parse_string(body.get_string_from_utf8())
	print(JSON.stringify(json, "\t"))
	if json.has("errors"):
		%message.text = json.errors[0]
	if json.has("token"):
		persist_user_data.set_data("token", json.token)
		persist_user_data.set_data("login.email", %user.text)
		persist_user_data.set_data("login.password", %password.text)
		emit_signal("logged_user", json.user)

func _on_connected():
	%connection_status.text = "connected..."
	%LoginButton.disabled = false
	
func _on_disconnected():
	%connection_status.text = "disconnected..."
	%LoginButton.disabled = true
