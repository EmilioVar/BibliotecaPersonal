<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $messages = [
            'title.required' => 'el campo título es obligatorio',
            'title.unique' => 'el título ya está registrado'
        ];

        return [
            'title' => ['required','unique:books'],
            'author' => 'max:255',
            'editorial' => 'max:255',
            'pages' => '',
            'opinion' => 'max:1000',
            'votation' => 'max:5',
            'img' => '',
        ];
    }
}
