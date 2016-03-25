<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'title' => 'required|min:3',
//            'sub_category_id' => 'required|integer',
//            'color_id' => 'required|integer',
//            'material_id' => 'required|integer',
//            'producer_id' => 'required|integer',
            'product_code' => 'required|min:2',
            'content' => 'required|min:5',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}
