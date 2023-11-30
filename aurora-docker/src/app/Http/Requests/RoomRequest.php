<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RoomRequest extends FormRequest
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
        $required = $this->method() === 'POST' ? 'required|' : '';
        return [
            'name' => "$required string|unique:rooms",
            'title' => "$required string",
            'purpose' => "$required string",
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
            'name.required' => 'The name of the Room is required',
            'title.required' => 'The title of the Room is required',
            'purpose.required' => 'The purpose of the Room is required'
        ];
    }
}
