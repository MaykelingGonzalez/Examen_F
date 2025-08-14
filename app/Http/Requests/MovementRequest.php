<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class MovementRequest extends FormRequest
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
            'quantity' => 'required|integer',
            'observations' => 'required|max:1000',
            'type_movement_id' => 'required',
            'product_id' => 'required',
            'user_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'quantity.required' => 'El campo "cantidad" es obligatorio.',
            'quantity.integer' => 'El campo "cantidad" debe ser un número entero.',

            'observations.required' => 'El campo "observaciones" es obligatorio.',
            'observations.max' => 'El campo "observaciones" no puede tener más de 1000 caracteres.',

            'type_movement_id.required' => 'El campo "tipo de movimiento" es obligatorio.',

            'product_id.required' => 'El campo "producto" es obligatorio.',

            'user_id.required' => 'El campo "usuario" es obligatorio.',
        ];
    }
}
