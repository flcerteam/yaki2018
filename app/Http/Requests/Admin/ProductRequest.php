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
            'description'       => 'max:1000',
            'categories'        => 'required',
            'status'            => 'required|numeric|between:0,1',
            'unit_id'           => 'required',
            'number_of_unit'    => 'required|numeric|between:0,9999.9',
            'price'             => 'required|numeric|between:0,999999999999999999',
            'ribbon_id'         => 'required',
            'ribbon_content'    => 'required_unless:ribbon_id,0|sometimes|nullable|max:12'
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
            'sku'               => trans('product.sku'),
            'name'              => trans('product.name'),
            'description'       => trans('product.description'),
            'categories'        => trans('category.category'),
            'status'            => trans('common.status'),
            'unit_id'           => trans('unit.unit'),
            'number_of_unit'    => trans('product.number_of_unit'),
            'price'             => trans('product.price'),
            'ribbon_id'         => trans('ribbon.name'),
            'ribbon_content'    => trans('ribbon.ribbon_content'),
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
            'ribbon_content.required_unless' => 'Trường hợp chọn dải màu hiển thị thì xin nhập nội dung hiển thị.'
        ];
    }
}
