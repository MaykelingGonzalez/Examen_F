<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:100|min:3',
            'email' => ['required', 'string', 'email', 'max:100', Rule::unique('users')->ignore($this->user)],
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|max:20|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo "nombre" es obligatorio.',
            'name.string' => 'El campo "nombre" debe ser una cadena de texto.',
            'name.max' => 'El campo "nombre" no puede tener más de 100 caracteres.',
            'name.min' => 'El campo "nombre" debe tener al menos 3 caracteres.',

            'email.required' => 'El campo "correo electrónico" es obligatorio.',
            'email.string' => 'El campo "correo electrónico" debe ser una cadena de texto.',
            'email.email' => 'El campo "correo electrónico" debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo "correo electrónico" no puede tener más de 100 caracteres.',
            'email.unique' => 'El campo "correo electrónico" debe ser único.',

            'password.required' => 'El campo "contraseña" es obligatorio.',
            'password.string' => 'El campo "contraseña" debe ser una cadena de texto.',
            'password.min' => 'El campo "contraseña" debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',

            'role.required' => 'El campo "rol" es obligatorio.',
            'role.string' => 'El campo "rol" debe ser una cadena de texto.',
            'role.max' => 'El campo "rol" no puede tener más de 20 caracteres.',
            'role.min' => 'El campo "rol" debe tener al menos 3 caracteres.'
        ];
    }
}