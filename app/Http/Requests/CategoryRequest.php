<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {

        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        
        return [
            'title' => 'required|min:2|max:255',
            'url' => 'required|min:2|max:255|regex:/^[a-z\d-]+$/|unique:categories,url' . $item_id,
            'description' => 'required|min:2',
            'image' => 'image',
        ];
    }
}
