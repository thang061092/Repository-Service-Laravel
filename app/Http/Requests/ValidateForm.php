<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "code" => "required|min:1|max:10|unique:employees,idCode",
            "group" => "required",
            "date" => 'required',
            'name' => 'required|min:1|max:20',
            'phone' => 'required|min:10|max:12|unique:employees,phone',
            'card' => 'required|min:9|max:12|unique:employees,idCard',
            'email' => 'required|unique:employees,email|email',
            'address' => 'required'
        ];
    }
}
