<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ResourceCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required|string|in:folder,file'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->customValidation($validator);
        });
    }

    protected function customValidation($validator)
    {
        $parent_resource = $this->route('resource');
        $parent_type = $parent_resource->type;

        if ($parent_type === 'file') {
            $validator->errors()->add('parent_type', 'The parent resource must be a folder.');
        }
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

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $request_id = request()->header('Request-ID');
        $response = response()->json([
            'errors' => $errors
        ], 422)->withHeaders(['Request-ID' => $request_id,]);

        throw new HttpResponseException($response);
    }
}
