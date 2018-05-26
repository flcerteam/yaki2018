<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Only allow updates if the user is logged in
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
            'cid'            => 'required|max:20|unique:categories,cid',
            'name'           => 'required|max:255|unique:categories,name',
            'ribbon_id'      => 'required',
            'ribbon_content' => 'required_unless:ribbon_id,0|sometimes|nullable|max:12'
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
            'cid' => trans('category.cid'),
            'name' => trans('category.name'),
            'ribbon_id' => trans('ribbon.name'),
            'ribbon_content' => trans('ribbon.ribbon_content'),
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
