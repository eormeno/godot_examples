<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email no es válido',
            'email.exists' => 'La cuenta no existe',
            'password.required' => 'La contraseña es obligatoria',
        ];
    }
}
