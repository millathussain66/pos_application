<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [


            "catagory_id"=>'required',
            "title"=>'required|string',
            "description"=>'required|string',
            "const_price"=>'required|numeric',
            "price"=>'required',


        ];
    }
}
