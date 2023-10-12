<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegisterRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
	 */
	public function rules(): array
	{
		return [
			'user_name' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
			'email' => 'required|string|email|unique:users',
			'password' => [
				'required',
				'confirmed',
				PasswordRules::min(3)->letters()
			]
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'name.required' => 'The user Name is required',
			'email.required' => 'Email is required',
			'email.email' => 'Email is invalid',
			'email.unique' => 'Email is already taken',
			'password.required' => 'Password is required',
			'password.confirmed' => 'Password confirmation does not match',
			'password.min' => 'Password must be at least 3 characters',
			'password.letters' => 'Password must contain at least 1 letter'
		];
	}
}
