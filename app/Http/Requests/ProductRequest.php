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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'sub_title' => 'required|min:5|max:255',
            'qty' => 'required|min:1|max:30',
            'desc' => 'required',
            'product_images' => 'required',
            'category_id' => 'required'
        ];
    }
}
