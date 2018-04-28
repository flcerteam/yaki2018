<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'name' => 'required|min:1|max:255',
            'slug' => 'required|min:1|max:255|unique:branches,slug',
            'description' => 'required|min:1|max:1000',
            'address' => 'required|min:1|max:500',
            'contact_name' => 'required|min:1|max:100',
            'phone_number' => 'required|min:1|max:50',
            'email' => 'required|min:1|max:255',
            'open_hour' => 'required|min:1|max:20',
            'close_hour' => 'required|min:1|max:20',
            'location' => 'min:1|max:1000',
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
