<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category' => 'required|alpha_spaces|max:10',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'La categoría es obligatorio.',
            'category.alpha_spaces' => 'La categoría no puede contener números ni caracteres.',
            'category.max' => 'La categoría no puede tener más de 10 caracteres.',
        ];
    }
}
