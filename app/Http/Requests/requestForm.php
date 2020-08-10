<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>'required',
            'image'=> 'required',
            'price'=>'required',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Ban chua nhap ten san pham',
            'image.required'=>'Ban chua nhap hinh anh  san pham',
            'price.required'=>'Ban chua nhap gia san pham',
            'description.required'=>'Ban chua nhap mo ta ve san pham',

        ];
    }

}
