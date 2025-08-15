<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeMovementRequest extends FormRequest
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
            'type_movement_code' => ['required', 'string', 'max:14', Rule::unique('type_movements')->ignore($this->type_movement)],
            'type_movement' => 'required|string|max:20|min:3',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'type_movement_code.required' => 'El campo "código de tipo de movimiento" es obligatorio.',
            'type_movement_code.string' => 'El campo "código de tipo de movimiento" debe ser una cadena de texto.',
            'type_movement_code.max' => 'El campo "código de tipo de movimiento" no puede tener más de 20 caracteres.',
            'type_movement_code.min' => 'El campo "código de tipo de movimiento" debe tener al menos 3 caracteres.',

            'type_movement.required' => 'El campo "tipo de movimiento" es obligatorio.',
            'type_movement.string' => 'El campo "tipo de movimiento" debe ser una cadena de texto.',
            'type_movement.max' => 'El campo "tipo de movimiento" no puede tener más de 20 caracteres.',
            'type_movement.min' => 'El campo "tipo de movimiento" debe tener al menos 3 caracteres.',

            'description.required' => 'El campo "descripción" es obligatorio.'
        ];
    }
}
