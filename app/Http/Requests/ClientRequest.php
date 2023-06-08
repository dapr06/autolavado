<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|alpha_spaces|max:50',
            'surname' => 'required|alpha_spaces|max:50',
            'phone' => 'required|numeric|digits:9',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.alpha_spaces' => 'El nombre no puede contener números ni caracteres.',
            'name.max' => 'El nombre no puede tener más de 50 caracteres.',
            'surname.required' => 'El apellido es obligatorio.',
            'surname.alpha_spaces' => 'El apellido no puede contener números ni caracteres.',
            'surname.max' => 'El apellido no puede tener más de 50 caracteres.',
            'phone.required' => 'El teléfono es obligatorio.',
            'phone.numeric' => 'El teléfono debe ser un número.',
            'phone.digits' => 'El teléfono debe tener 9 dígitos.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe tener un formato válido.',
            'category.required' => 'La categoría es obligatorio.',
            'category.alpha_spaces' => 'La categoría no puede contener números ni caracteres.',
            'category.max' => 'La categoría no puede tener más de 10 caracteres.',
        ];
    }
}
