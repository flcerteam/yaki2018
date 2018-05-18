<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BranchUpdateRequest extends FormRequest
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
            'name' => 'required|max:255|unique:branches,id,'.$this->id,
            'description' => 'required|max:1000',
            'address' => 'required|max:500',
            'contact_name' => 'required|max:100',
            'phone_number' => 'required|max:50',
            'email' => 'required|max:255',
            'open_hour' => 'required|max:20',
            'close_hour' => 'required|max:20',
            'location' => 'required|max:1000',
            'status' => 'required',
            'has_buffet_service' => 'required|numeric|between:0,1',
            'buffet_price'  => 'required_if:has_buffet_service,==,1|sometimes|nullable|numeric|between:0,999999999999999999'
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
            'name' => trans('branch.name'),
            'description' => trans('branch.description'),
            'address' => trans('branch.address'),
            'contact_name' => trans('branch.contact_name'),
            'phone_number' => trans('branch.phone_number'),
            'email' => trans('branch.email'),
            'open_hour' => trans('branch.open_hour'),
            'close_hour' => trans('branch.close_hour'),
            'location' => trans('branch.location'),
            'status' => trans('common.status'),
            'has_buffet_service' => trans('branch.has_buffet_service'),
            'buffet_price' => trans('branch.buffet_price')
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
            'buffet_price.required_if' => trans('branch.msg_buffet_price_require')
        ];
    }
}
