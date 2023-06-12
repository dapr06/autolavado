<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'client_id' => 'required',
            'number_plate' => 'required|regex:/^[0-9]{4}[a-zA-Z]{3}$/',
            'interior_type' => 'required',
            'interior_color' => 'required|alpha_spaces|max:20',
            'exterior_type' => 'required',
            'exterior_color' => 'required|alpha_spaces|max:20',
        ];
    }

    public function messages()
    {
        return [
            'client_id.required' => 'El propietario/a es obligatorio.',
            'number_plate.required' => 'La matrícula es obligatorio.',
            'number_plate.regex' => 'La matrícula tiene que tener este formato: 0000AAA.',
            'interior_type.required' => 'El tipo de interior es obligatorio.',
            'interior_color.required' => 'El color del interior es obligatorio.',
            'interior_color.alpha_spaces' => 'El interior no puede contener números ni caracteres.',
            'interior_color.max' => 'El color del interior no puede tener más de 50 caracteres.',
            'exterior_type.required' => 'El tipo de exterior es obligatorio.',
            'exterior_color.required' => 'El color del exterior es obligatorio.',
            'exterior_color.alpha_spaces' => 'El color del exterior no puede contener números ni caracteres.',
            'exterior_color.max' => 'El color del exterior no puede tener más de 50 caracteres.',
        ];
    }
}
