<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrRequest extends FormRequest
{

    protected $stopOnFirstFailure = false; // Прекращение валидации после первой неуспешной проверки

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
        return [
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8','max:10'],
        ];
    }

    public function messages(){
        return [
            'required' => 'это поле обязательно к заполнению',
            'min' => ':attribute должен имет минимум :min символов',
            'max' => ':attribute должен имет максимум :max символов',
            'email' => ':attribute не правильного формата',
        ];
    }
}
