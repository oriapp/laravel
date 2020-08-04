<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // add ip block here (later)
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:70',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:30',
            'address' => 'required|min:2|max:255',
            'city' => 'required|min:2|max:255',
            'state' => 'required|min:2|max:255',
            'zip' => 'required|min:2|numeric',
        ];
    }

    /*
    public function messeges(){
        return [
            'name.required' => 'אנא מלא שם בבקשה',
            'name.min' => 'יש להזין לפחות 2 תווים בשם',
            'name.max' => 'שם יכול להכיל עד 70 תווים',
            
        ];
    }
    */
}
