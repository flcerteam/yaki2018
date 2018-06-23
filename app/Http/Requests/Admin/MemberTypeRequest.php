<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MemberTypeRequest extends FormRequest
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
            'name' => 'required|max:255|unique:member_types,name'.($this->request->get('id') ? ','.$this->request->get('id') : ''),
            'point_from' => 'required|numeric|between:0,9999999999',
            'point_to' => 'required|numeric|between:0,9999999999',
            'percent_discount' => 'required|numeric|between:0,99',
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
            'name' => trans('mt.name'),
            'point_from' => trans('mt.point_from'),
            'point_to' => trans('mt.point_to'),
            'percent_discount' => trans('mt.percent_discount'),
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
