<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InventoryRequest extends FormRequest
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
            'current_quantity' => 'required|integer',
            'minimum_quantity' => 'required|integer',
            'maximum_quantity' => 'required|integer',
            'description' => 'nullable|max:1000|min:5',
            'product_id' => 'required',
            'warehouse_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'current_quantity.required' => 'El campo "cantidad actual" es obligatorio.',
            'current_quantity.integer' => 'El campo "cantidad actual" debe ser un número entero.',

            'minimum_quantity.required' => 'El campo "cantidad mínima" es obligatorio.',
            'minimum_quantity.integer' => 'El campo "cantidad mínima" debe ser un número entero.',

            'maximum_quantity.required' => 'El campo "cantidad máxima" es obligatorio.',
            'maximum_quantity.integer' => 'El campo "cantidad máxima" debe ser un número entero.',
            
            'description.max' => 'El campo "descripción" no puede tener más de 1000 caracteres.',
            'description.min' => 'El campo "descripción" debe tener al menos 5 caracteres.',

            'product_id.required' => 'El campo "producto" es obligatorio.',

            'warehouse_id.required' => 'El campo "bodega" es obligatorio.',
        ];
    }
}
