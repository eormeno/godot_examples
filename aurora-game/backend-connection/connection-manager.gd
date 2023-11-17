class_name ConnectionManager extends BaseConnectionManager

const LOGIN_URL:String =  BASE_URL + "login"
const RESOURCES_URL:String =  BASE_URL + "resources"

func login(email : String, password : String, response : Callable):
	var json = JSON.stringify({ email = email, password = password })
	enqueue_request(LOGIN_URL, HTTPClient.METHOD_POST, json, response)
	
func get_user_resources(callback : Callable):
	enqueue_request(RESOURCES_URL, HTTPClient.METHOD_GET, "", callback)

func get_resource(id : int):
	var route = RESOURCES_URL + "/" + str(id)
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_GET)
	var response : Dictionary = await request.completed
	return response

func update_resource_content(id : int, new_content : String):
	var route = RESOURCES_URL + "/" + str(id)
	var json = JSON.stringify({ content = new_content })
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_PUT, json)
	var response : Dictionary = await request.completed
	return response
	
func get_compiled_script(id : int):
	var route = RESOURCES_URL + "/" + str(id) + "/compiled"
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_GET)
	var response : Dictionary = await request.completed
	return response
	
func rename_resource(id : int, new_name : String):
	var route = RESOURCES_URL + "/" + str(id) + "/rename"
	var json = JSON.stringify({ name = new_name })
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_PATCH, json)
	var response : Dictionary = await request.completed
	return response
	
func create_resource(parent_id : int, type : String):
	var route = RESOURCES_URL + "/" + str(parent_id) + "/create"
	var param : Dictionary = {type = type}
	if type == "file": param.extension = "script"
	var json = JSON.stringify(param)
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_POST, json)
	var response : Dictionary = await request.completed
	return response

func remove_resource(id : int):
	var route = RESOURCES_URL + "/" + str(id)
	var request : ApiRequest = enqueue_request(route, HTTPClient.METHOD_DELETE)
	var response : Dictionary = await request.completed
	return response
	
