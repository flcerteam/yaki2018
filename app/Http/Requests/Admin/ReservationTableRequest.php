<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ReservationTableRequest extends FormRequest
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
            'branch_id' => 'required',
            'rt_type_id' => 'required',
            'reservation_date' => 'required|date',
            'reservation_hour' => 'required|date_format:H:i',
            'number_of_people' => 'required|numeric|between:1,9999',
            'note' => 'max:1500'
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
            'branch_id' => trans('branch.branch'),
            'rt_type_id' => trans('rt.rt_type'),
            'reservation_date' => trans('rt.reservation_date'),
            'reservation_hour' => trans('rt.reservation_hour'),
            'number_of_people' => trans('rt.number_of_people'),
            'note' => trans('rt.note')
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
            'number_of_people.between' => trans('rt.people_number_err')
        ];
    }
}
