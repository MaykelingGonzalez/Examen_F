<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeSupplierRequest extends FormRequest
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
            'type' => 'required|string|max:20|min:3'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'El campo "tipo de proveedor" es obligatorio.',
            'type.string' => 'El campo "tipo de proveedor" debe ser una cadena de texto.',
            'type.max' => 'El campo "tipo de proveedor" no puede tener más de 20 caracteres.',
            'type.min' => 'El campo "tipo de proveedor" debe tener al menos 3 caracteres.'
        ];
    }
}
