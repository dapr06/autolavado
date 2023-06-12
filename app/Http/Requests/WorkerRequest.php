<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
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
            'DNI' => 'required|regex:/^[0-9]{8}[a-zA-Z]$/',
            'email' => 'required|email',
            'role' => 'required',
            'turn' => 'required',
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
            'DNI.required' => 'El DNI es obligatorio.',
            'DNI.regex' => 'El DNI debe tener el formato correcto (8 números y 1 letra).',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe tener un formato válido.',
            'role.required' => 'El rol es obligatorio.',
            'turn.required' => 'El turno es obligatorio.',
        ];
    }
}
