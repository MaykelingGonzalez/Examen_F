<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplierRequest extends FormRequest
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
            'supplier_code' => ['required', 'string', 'max:20', 'min:5',Rule::unique('suppliers')->ignore($this->supplier)],
            'company' => 'required|string|max:100|min:3',
            'representative' => 'required|string|max:100|min:17',
            'telephone' => ['required', 'string', 'min:14', Rule::unique('suppliers')->ignore($this->supplier)],
            'email' => ['required', 'string', 'email', 'max:255', 'min:6', Rule::unique('suppliers')->ignore($this->supplier)],
            'address' => 'required',
            'type_supplier_id' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'supplier_code.required' => 'El campo "código del proveedor" es obligatorio.',
            'supplier_code.string' => 'El campo "código del proveedor" debe ser una cadena de texto.',
            'supplier_code.max' => 'El campo "código del proveedor" no puede tener más de 20 caracteres.',
            'supplier_code.min' => 'El campo "código del proveedor" debe tener al menos 5 caracteres.',
            'supplier_code.unique' => 'El campo "código del proveedor" debe ser único.',

            'company.required' => 'El campo "empresa" es obligatorio.',
            'company.string' => 'El campo "empresa" debe ser una cadena de texto.',
            'company.max' => 'El campo "empresa" no puede tener más de 100 caracteres.',
            'company.min' => 'El campo "empresa" debe tener al menos 3 caracteres.',

            'representative.required' => 'El nombre del "representante" es obligatorio.',
            'representative.string' => 'El nombre del "representante" debe ser una cadena de texto.',
            'representative.max' => 'El nombre del "representante" no puede tener más de 100 caracteres.',
            'representative.min' => 'El nombre del "representante" debe tener al menos 17 caracteres.',

            'telephone.required' => 'El campo "teléfono" es obligatorio.',
            'telephone.string' => 'El campo "teléfono" debe ser una cadena de texto.',
            'telephone.min' => 'El campo "teléfono" debe tener al menos 14 caracteres.',

            'email.required' => 'El campo "correo electrónico" es obligatorio.',
            'email.string' => 'El campo "correo electrónico" debe ser una cadena de texto.',
            'email.email' => 'El campo "correo electrónico" debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo "correo electrónico" no puede tener más de 255 caracteres.',
            'email.min' => 'El campo "correo electrónico" debe tener al menos 6 caracteres.',
            'email.unique' => 'El campo "correo electrónico" debe ser único.',

            'address.required' => 'El campo "dirección" es obligatorio.',

            'type_supplier_id.required' => 'El campo "tipo de proveedor" es obligatorio.',
        ];
    }
}
