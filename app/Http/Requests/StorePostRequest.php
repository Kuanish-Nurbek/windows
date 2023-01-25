<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

use Illuminate\Validation\Validator;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StorePostRequest extends FormRequest
{

    protected $stopOnFirstFailure = false; // Прекращение валидации после первой неуспешной проверки
    // protected $redirect = '/post/form'; // URI перенаправления пользователей в случае неуспешной валидации
    // protected $redirectRoute = 'postForm'; // если вы хотите перенаправить пользователей на именованный маршрут




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

        $rules = [
            'title' => 'required|min:3|max:10',
            'body' => 'required|min:3|max:10',
            'birth_date' => 'required',
        ];

        // dd(get_class_methods($this->route()));


        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'post title',
            'body' => 'post body',
            'birth' => 'birth date',
        ];
    }

    public function messages(){

        $messages =  [
            'required' => 'Поле :attribute обязательно для ввода',
            'min' => 'Поле :attribute должно иметь минимум :min сииволов',
            'max' => 'Поле :attribute должно иметь максимум :max сииволов',
            'title.max' => 'Поле :attribute должно содержать максимум :max сииволов', // для конекретного поле
        ];

        return $messages;
    }


    // public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         if ($this -> only(['title'])) {
    //             $validator->errors()->add('title', 'Что-то не так с этим полем!');   // этот код будет выполнятся после валидации
    //         }
    //     });
    // }

    // Если вам необходимо подготовить или обработать какие-либо данные из запроса перед применением правил валидации
    public function prepareForValidation(){
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
        // dd(Auth::check());
        // dump(Auth::logout());

        // dd(get_class_methods($this ));

        // dd($this -> all() );
        // dd($this -> get('body') );
    }


}
