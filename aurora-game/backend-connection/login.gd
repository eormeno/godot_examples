extends BaseUI

func _ready():
	super._ready()
	connection.connected.connect(_on_connected)
	connection.disconnected.connect(_on_disconnected)
	%user.grab_focus()
	%user.text = persist_user_data.get_data("login.email", "")
	%password.text = persist_user_data.get_data("login.password", "")
	%LoginButton.pressed.connect(_on_login_button)
	%LocalConnection.set_pressed_no_signal(persist_user_data.get_data("local", false))
	_update_local_connection_name()
	
func _on_login_button():
	%message.text = ""
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
	%connection_status.text = "Conectado"
	%LoginButton.disabled = false
	
func _on_disconnected():
	%connection_status.text = "Desconectado"
	%LoginButton.disabled = true

func _on_local_connection_pressed():
	var local : bool = _update_local_connection_name()
	persist_user_data.set_data("local", !local)
	%connection_status.text = ""
	
func _update_local_connection_name():
	var local : bool = !%LocalConnection.is_pressed()
	if local:
		%LocalConnection.text = "Local"
	else:
		%LocalConnection.text = "Remote"
	return local
