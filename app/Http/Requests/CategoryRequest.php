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
            'category' => 'required|string|max:255',
            'description' => 'nullable|max:1000|min:5',
        ];
    }

    public function messages()
    {
        return[
            'category.required' => 'El campo "categoría" es obligatorio.',
            'category.string' => 'El campo "categoría" debe ser una cadena de texto.',
            'category.max' => 'El campo "categoría" no puede tener más de 255 caracteres.',

            'description.max' => 'El campo "descripción" no puede tener más de 1000 caracteres.',
            'description.min' => 'El campo "descripción" debe tener al menos 5 caracteres.'
        ];
    }
}
