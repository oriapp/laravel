<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address' => 'required|min:2|max:100',
            'city' => 'required|min:2|max:100',
            'state' => 'required|min:2|max:100',
            'zip' => 'required|numeric|digits_between:3,55',
            'phone' => 'required|min:6|max:16',
            'email' => 'required|max:255|',
        ];
    }
}
