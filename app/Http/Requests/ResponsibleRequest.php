<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ResponsibleRequest extends FormRequest
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
            'responsible_code' => ['required', 'string', 'max:20', 'min:5',Rule::unique('responsibles')->ignore($this->responsible)],
            'name' => 'required|string|max:100|min:17',
            'identification' => ['required', 'string', 'min:16', Rule::unique('responsibles')->ignore($this->responsible)],
            'birthdate' => 'required',
            'birthplace' => 'required|string|max:255|min:3',
            'age' => 'required|string|max:3|min:1',
            'sex' => 'required|string|max:8',
            'telephone' => ['required', 'string', 'max:14', Rule::unique('responsibles')->ignore($this->responsible)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('responsibles')->ignore($this->responsible)],
            'country' => 'required|string|max:100|min:5',
            'nationality' => 'required|string|max:100|min:5',
            'department' => 'required|string|max:100|min:3',
            'municipality' => 'required|string|max:100|min:3',
            'address' => 'required',
            'marital_status' => 'required|string|max:20|min:5',
            'academic_level' => 'required|string|max:100|min:7'
        ];
    }

    public function messages()
    {
        return [
            'responsible_code.required' => 'El "código del responsable" es obligatorio.',
            'responsible_code.string' => 'El "código del responsable" debe ser una cadena de texto.',
            'responsible_code.max' => 'El "código del responsable" no puede tener más de 20 caracteres.',
            'responsible_code.min' => 'El "código del responsable" debe tener al menos 5 caracteres.',
            'responsible_code.unique' => 'El "código del responsable" debe ser único.',

            'name.required' => 'El "nombre" es obligatorio.',
            'name.string' => 'El "nombre" debe ser una cadena de texto.',
            'name.max' => 'El "nombre" no puede tener más de 100 caracteres.',
            'name.min' => 'El "nombre" debe tener al menos 17 caracteres.',

            'identification.required' => 'La "identificación" es obligatoria.',
            'identification.string' => 'La "identificación" debe ser una cadena de texto.',
            'identification.min' => 'La "identificación" debe tener al menos 16 caracteres.',
            'identification.unique' => 'La "identificación" debe ser única.',

            'birthdate.required' => 'La "fecha de nacimiento" es obligatoria.',

            'birthplace.required' => 'El "lugar de nacimiento" es obligatorio.',
            'birthplace.string' => 'El "lugar de nacimiento" debe ser una cadena de texto.',
            'birthplace.max' => 'El "lugar de nacimiento" no puede tener más de 255 caracteres.',
            'birthplace.min' => 'El "lugar de nacimiento" debe tener al menos 3 caracteres.',

            'age.required' => 'La "edad" es obligatoria.',
            'age.string' => 'La "edad" debe ser una cadena de texto.',
            'age.max' => 'La "edad" no puede tener más de 3 caracteres.',
            'age.min' => 'La "edad" debe tener al menos 1 carácter.',

            'sex.required' => 'El "sexo" es obligatorio.',
            'sex.string' => 'El "sexo" debe ser una cadena de texto.',
            'sex.max' => 'El "sexo" no puede tener más de 8 caracteres.',

            'telephone.required' => 'El "teléfono" es obligatorio.',
            'telephone.string' => 'El "teléfono" debe ser una cadena de texto.',
            'telephone.max' => 'El "teléfono" no puede tener más de 14 caracteres.',
            'telephone.unique' => 'El "teléfono" debe ser único.',

            'email.required' => 'El "correo electrónico" es obligatorio.',
            'email.string' => 'El "correo electrónico" debe ser una cadena de texto.',
            'email.email' => 'El "correo electrónico" debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El "correo electrónico" no puede tener más de 255 caracteres.',
            'email.unique' => 'El "correo electrónico" debe ser único.',

            'country.required' => 'El "país" es obligatorio.',
            'country.string' => 'El "país" debe ser una cadena de texto.',
            'country.max' => 'El "país" no puede tener más de 100 caracteres.',
            'country.min' => 'El "país" debe tener al menos 5 caracteres.',

            'nationality.required' => 'La "nacionalidad" es obligatoria.',
            'nationality.string' => 'La "nacionalidad" debe ser una cadena de texto.',
            'nationality.max' => 'La "nacionalidad" no puede tener más de 100 caracteres.',
            'nationality.min' => 'La "nacionalidad" debe tener al menos 5 caracteres.',

            'department.required' => 'El "departamento" es obligatorio.',
            'department.string' => 'El "departamento" debe ser una cadena de texto.',
            'department.max' => 'El "departamento" no puede tener más de 100 caracteres.',
            'department.min' => 'El "departamento" debe tener al menos 3 caracteres.',

            'municipality.required' => 'El "municipio" es obligatorio.',
            'municipality.string' => 'El "municipio" debe ser una cadena de texto.',
            'municipality.max' => 'El "municipio" no puede tener más de 100 caracteres.',
            'municipality.min' => 'El "municipio" debe tener al menos 3 caracteres.',

            'address.required' => 'La "dirección" es obligatoria.',

            'marital_status.required' => 'El "estado civil" es obligatorio.',
            'marital_status.string' => 'El "estado civil" debe ser una cadena de texto.',
            'marital_status.max' => 'El "estado civil" no puede tener más de 20 caracteres.',
            'marital_status.min' => 'El "estado civil" debe tener al menos 5 caracteres.',

            'academic_level.required' => 'El "nivel académico" es obligatorio.',
            'academic_level.string' => 'El "nivel académico" debe ser una cadena de texto.',
            'academic_level.max' => 'El "nivel académico" no puede tener más de 100 caracteres.',
            'academic_level.min' => 'El "nivel académico" debe tener al menos 7 caracteres.',
        ];
    }
}
