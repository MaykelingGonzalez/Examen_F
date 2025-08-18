<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'product_code'=> ['required', 'string', 'max:20', 'min:5', Rule::unique('products')->ignore($this->product)],
            'name'=> 'required|string|max:100|min:3',
            'price'=> 'required|string|min:1|max:20',
            'description'=> 'required|max:500',
            'category_id' => 'required',
            'measureUnit_id' => 'required',
            'supplier_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_code.required' => 'El "código del producto" es obligatorio.',
            'product_code.string' => 'El "código del producto" debe ser una cadena de texto.',
            'product_code.max' => 'El "código del producto" no puede tener más de 20 caracteres.',
            'product_code.min' => 'El "código del producto" debe tener al menos 5 caracteres.',
            'product_code.unique' => 'El "código del producto" debe ser único.',

            'name.required' => 'El "nombre" es obligatorio.',
            'name.string' => 'El "nombre" debe ser una cadena de texto.',
            'name.max' => 'El "nombre" no puede tener más de 100 caracteres.',
            'name.min' => 'El "nombre" debe tener al menos 3 caracteres.',

            'price.required' => 'El "precio" es obligatorio.',
            'price.string' => 'El "precio" debe ser una cadena de texto.',
            'price.min' => 'El "precio" debe tener al menos 1 carácter.',
            'price.max' => 'El "precio" no puede tener más de 20 caracteres.',

            'description.required' => 'La "descripción" es obligatoria.',
            'description.max' => 'La "descripción" no puede tener más de 500 caracteres.',

            'category_id.required' => 'La "categoría" es obligatoria.',

            'measureUnit_id.required' => 'La "unidad de medida" es obligatoria.',

            'supplier_id.required' => 'El "proveedor" es obligatorio.',
        ];
    }
}
