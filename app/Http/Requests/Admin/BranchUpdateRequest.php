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
            'has_buffet_service' => 'required|numeric|between:0,1',
            'location' => 'required|max:1000',
            'status' => 'required'
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
