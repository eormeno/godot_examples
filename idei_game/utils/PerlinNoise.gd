extends Node2D

var Permutation = MakePermutation();

func Shuffle(arrayToShuffle):
	for e in arrayToShuffle.size():
#	for(let e = arrayToShuffle.length-1; e > 0; e--):
		var index = round(randf() * (e - 1) )
		var temp = arrayToShuffle[e]
		arrayToShuffle[e] = arrayToShuffle[index]
		arrayToShuffle[index] = temp

func MakePermutation():
	var permutation = []
	for i in range(0,256):
		permutation.append(i);
	Shuffle(permutation);

	for i in range(0,256):
		permutation.append(permutation[i]);
	return permutation

func GetConstantVector(v):
#	v is the value from the permutation table
	var h = v & 3
	if h == 0:
		return Vector2(1.0, 1.0)
	elif h == 1:
		return Vector2(-1.0, 1.0)
	elif h == 2:
		return Vector2(-1.0, -1.0)
	else:
		return Vector2(1.0, -1.0)

func Fade(t):
	return ((6*t - 15)*t + 10)*t*t*t;

func Lerp(t, a1, a2):
	return a1 + t*(a2-a1)

func Noise2D(x, y):
	var X = floor(x) & 255
	var Y = floor(y) & 255

	var xf = x - floor(x)
	var yf = y - floor(y)

	var topRight = Vector2(xf-1.0, yf-1.0)
	var topLeft = Vector2(xf, yf-1.0)
	var bottomRight = Vector2(xf-1.0, yf)
	var bottomLeft = Vector2(xf, yf)
	
#	Select a value from the permutation array for each of the 4 corners
	var valueTopRight = Permutation[Permutation[X+1]+Y+1];
	var valueTopLeft = Permutation[Permutation[X]+Y+1];
	var valueBottomRight = Permutation[Permutation[X+1]+Y];
	var valueBottomLeft = Permutation[Permutation[X]+Y];
	
	var dotTopRight = topRight.dot(GetConstantVector(valueTopRight));
	var dotTopLeft = topLeft.dot(GetConstantVector(valueTopLeft));
	var dotBottomRight = bottomRight.dot(GetConstantVector(valueBottomRight));
	var dotBottomLeft = bottomLeft.dot(GetConstantVector(valueBottomLeft));
	
	var u = Fade(xf);
	var v = Fade(yf);
	
	return Lerp(u,
		Lerp(v, dotBottomLeft, dotTopLeft),
		Lerp(v, dotBottomRight, dotTopRight)
	)
	
func _ready():
	print(Noise2D(1000, 100))
