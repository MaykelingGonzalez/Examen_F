<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|min:1',
            'description' => 'nullable|max:1000|min:5',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El campo "categoría" es obligatorio.',
            'name.string' => 'El campo "categoría" debe ser una cadena de texto.',
            'name.max' => 'El campo "categoría" no puede tener más de 255 caracteres.',
            'name.min' => 'El campo "categoría" debe tener al menos 1 carácter.',

            'description.max' => 'El campo "descripción" no puede tener más de 1000 caracteres.',
            'description.min' => 'El campo "descripción" debe tener al menos 5 caracteres.'
        ];
    }
}
