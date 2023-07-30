<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title'         => 'required|string',
            'description'   => 'required|string',
            'order'         => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'The title field is required.',
            'title.string'          => 'The title must be a string.',
            'description.required'  => 'The description field is required.',
            'description.string'    => 'The description must be a string.',
            'order.required'        => 'The description field is required.',
            'order.integer'         => 'The description must be a number.',
        ];
    }
}
