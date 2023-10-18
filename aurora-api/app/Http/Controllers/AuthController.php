<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
	public function register(RegisterRequest $request)
	{
        $request_id = $request->header('Request-ID');
		$user = User::factory()->fromArray($request->validated())->create();
        $folder = Resource::factory()->folder()->ownedBy($user->id)->create();
        $user->update(['resource_id' => $folder->id]);
        $user->save();
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'message' => 'Successfully registered, you can now login',
            'folder' => $folder,
            'user' => $user
        ])->withHeaders([
            'Request-ID' => $request_id,
        ]);
	}

	public function login(LoginRequest $request)
	{
        $request_id = $request->header('Request-ID');
		$data = $request->validated();
		if (!Auth::attempt($data)) {
			return response([
				'errors' => ['El email o el password son incorrectos']
			], 422)->withHeaders([
                'Request-ID' => $request_id,
            ]);
		}
		$user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'message' => 'Successfully logged in',
            'user' => $user
        ])->withHeaders([
            'Request-ID' => $request_id,
        ]);
	}

	public function logout(Request $request)
	{
        $request_id = $request->header('Request-ID');
		$user = $request->user();
		$user->tokens()->delete();
        return response()->json([
            'user' => null,
            'message' => 'Successfully logged out'
        ])->withHeaders([
            'Request-ID' => $request_id,
        ]);
	}
}
