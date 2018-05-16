<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'              => 'required|max:100',
            'birth_date'        => 'sometimes|nullable|date',
            'gender'            => 'required|numeric|between:0,2',
            'phone_number'      => 'required|max:20|unique:members,phone_number'.($this->request->get('id') ? ','.$this->request->get('id') : ''),
            'email'             => 'required|email|max:255',
            'address'           => 'max:1000',
            'member_point'      => 'sometimes|nullable|numeric|between:0,9999999999',
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
            'name'          => trans('member.name'),
            'birth_date'    => trans('member.birth_date'),
            'gender'        => trans('member.gender'),
            'phone_number'  => trans('member.phone_number'),
            'email'         => trans('member.email'),
            'address'       => trans('member.address'),
            'member_point'  => trans('member.member_point')
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
