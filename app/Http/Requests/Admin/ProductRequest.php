<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
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
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku'               => 'required|max:100|unique:products,sku'.($this->request->get('id') ? ','.$this->request->get('id') : ''),
            'name'              => 'required|max:255',
            'description'       => 'required|max:1000',
            'categories'        => 'required',
            'unit_id'           => 'required',
            'number_of_unit'    => 'required|numeric|between:0,9999.9',
            'price'             => 'required|numeric|between:0,999999999999999999'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
