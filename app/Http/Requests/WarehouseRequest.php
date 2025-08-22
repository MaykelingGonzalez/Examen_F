<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WarehouseRequest extends FormRequest
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
            'warehouse_code' => ['required', 'string', 'max:20', 'min:5', Rule::unique('warehouses')->ignore($this->warehouse)],
            'name' => 'required|string|max:100|min:3',
            'location' => 'required|string|max:100|min:3',  
            'responsible_id' => 'required'       
        ];
    }

    public function messages()
    {
        return [

            'warehouse_code.required' => 'El "código de la bodega" es obligatorio.',
            'warehouse_code.string' => 'El "código de la bodega" debe ser una cadena de texto.',
            'warehouse_code.max' => 'El "código de la bodega" no puede tener más de 20 caracteres.',
            'warehouse_code.min' => 'El "código de la bodega" debe tener al menos 5 caracteres.',
            'warehouse_code.unique' => 'El "código de la bodega" debe ser único.',

            'name.required' => 'El "nombre" de la bodega es obligatorio.',
            'name.string' => 'El "nombre" de la bodega debe ser una cadena de texto.',
            'name.max' => 'El "nombre" de la bodega no puede tener más de 100 caracteres.',
            'name.min' => 'El "nombre" de la bodega debe tener al menos 3 caracteres.',

            'location.required' => 'La "ubicación" de la bodega es obligatoria.',
            'location.string' => 'La "ubicación" de la bodega debe ser una cadena de texto.',
            'location.max' => 'La "ubicación" de la bodega no puede tener más de 100 caracteres.',
            'location.min' => 'La "ubicación" de la bodega debe tener al menos 3 caracteres.',

            'responsible_id.required' => 'El "responsable" de la bodega es obligatorio.',
        ];
    }
}
