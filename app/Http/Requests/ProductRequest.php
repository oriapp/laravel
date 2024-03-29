<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {

        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        
        return [
            'category' => 'required',
            'title' => 'required|min:2|max:255',
            'url' => 'required|min:2|max:255|regex:/^[a-z\d-]+$/|unique:products,purl' . $item_id,
            'price' => 'required|numeric',
            'old-price' => 'numeric',
            'description' => 'required|min:2',
            'image' => 'image',
            'brand' => 'required|min:2|max:255',
            'weight' => 'required|numeric',
            'amount' => 'required|numeric',
            'pru' => 'required|min:2|max:30',
            'visibility' => 'required',
            'short' => 'required|min:5|max:55',
            //'size' => 'required|min:1|max:255',
        ];
    }
}
