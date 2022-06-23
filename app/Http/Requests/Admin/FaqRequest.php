<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'question' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'El nombre es obligatorio',
        ];
    }
}