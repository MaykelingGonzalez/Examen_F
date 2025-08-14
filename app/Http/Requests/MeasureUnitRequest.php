<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class MeasureUnitRequest extends FormRequest
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
            'measure_unit' => 'required|string|max:255',
            'symbol' => 'required|string|max:3|min:1',
        ];
    }

    public function messages()
    {
        return [
            'measure_unit.required' => 'El campo "unidad de medida" es obligatorio.',
            'measure_unit.string' => 'El campo "unidad de medida" debe ser una cadena de texto.',
            'measure_unit.max' => 'El campo "unidad de medida" no puede tener más de 255 caracteres.',

            'symbol.required' => 'El campo "símbolo" es obligatorio.',
            'symbol.string' => 'El campo "símbolo" debe ser una cadena de texto.',
            'symbol.max' => 'El campo "símbolo" no puede tener más de 3 caracteres.',
            'symbol.min' => 'El campo "símbolo" debe tener al menos 1 carácter.',
        ];
    }
}
