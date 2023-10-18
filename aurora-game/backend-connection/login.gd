extends BaseUI

func _ready():
	super._ready()
	connection.connected.connect(_on_connected)
	connection.disconnected.connect(_on_disconnected)
	%user.grab_focus()
	%user.text = persist_user_data.get_data("login.email", "")
	%password.text = persist_user_data.get_data("login.password", "")
	%LoginButton.pressed.connect(_on_login_button)
	
func _on_login_button():
	connection.login(%user.text, %password.text, _on_login_response)
	
func _on_login_response(response):
	if response.has("token"):
		persist_user_data.set_data("token", response.token)
		persist_user_data.set_data("login.email", %user.text)
		persist_user_data.set_data("login.password", %password.text)
		visible = false
		finished.emit(state_name, "finished")
	if response.has("errors"):
		%message.text = response.errors[0]
		%user.grab_focus()
		%user.select_all()

func _on_connected():
	%connection_status.text = "connected..."
	%LoginButton.disabled = false
	
func _on_disconnected():
	%connection_status.text = "disconnected..."
	%LoginButton.disabled = true

#func get_resources():
#	var headers = [
#		"Content-Type: application/json",
#		"Authorization: Bearer " + persist_user_data.get_data('token')
#	]
#	%HTTPRequest.request(RESOURCES_URL, headers, HTTPClient.METHOD_GET)
