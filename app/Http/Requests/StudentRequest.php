<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

    public function messages(){

        return [
            'uname.required' => ':attribute testing message',
            'uname.unique' => ':attribute testing message2'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            "uname"     => "required | unique:employee,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "contact"      => "required"
           
        ];
    }
}
