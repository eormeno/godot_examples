<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ResourceRenameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $parent_id = $this->route('resource')->parent_id;
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:20',
                'regex:/^[a-z0-9-_]+$/',
                'unique:resources,name,' . $parent_id . ',parent_id'
            ]
        ];
    }

    public function headers(): array
    {
        return [
            'Request-ID' => [
                'required'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name of the Resource is required',
            'name.string' => 'The name of the Resource must be a string',
            'name.max' => 'The name of the Resource must be less than 20 characters',
            'name.min' => 'The name of the Resource must be at least 3 characters',
            'name.regex' => 'The name of the Resource must contain only lowercase letters, numbers, dashes and underscores',
            'name.unique' => 'The name of the Resource must be unique in the folder',
            'header.Request-ID.required' => 'The Request-ID header is required',
        ];
    }

    private function getOldName(): string
    {
        $old_name = $this->route('resource')->name;
        return $old_name;
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $old_name = $this->getOldName();
        $errors->add('old', $old_name);
        $request_id = request()->header('Request-ID');
        $response = response()->json([
            'errors' => $errors
        ], 422)->withHeaders(['Request-ID' => $request_id,]);

        throw new HttpResponseException($response);
    }
}
