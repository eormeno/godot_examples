<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
	public function register(RegisterRequest $request)
	{
		$user = User::factory()->fromArray($request->validated())->create();
        $token = $user->createToken('token')->plainTextToken;
		return [
			'token' => $token,
			'user' => $user
		];
	}

	public function login(LoginRequest $request)
	{
		$data = $request->validated();

		if (!Auth::attempt($data)) {
			return response([
				'errors' => ['El email o el password son incorrectos']
			], 422);
		}

		$user = Auth::user();

		return [
			'token' => $user->createToken('token')->plainTextToken,
			'user' => $user
		];
	}

	public function logout(Request $request)
	{
		$user = $request->user();
		$user->tokens()->delete();
        return response()->json([
            'user' => null,
            'message' => 'Successfully logged out'
        ]);
	}
}
