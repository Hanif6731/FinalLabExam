<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequests extends FormRequest
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
            'username'=>'required',
            'name'=>'required',
            'password'=>'required',
            'company'=>'required',
            'contact'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'Username is required',
            'name.required'=>'Name is required',
            'password.required'=>'Password is required',
            'dept.required'=>'Department is required',
            'company.required'=>'type is required',
            'contact.required'=>'CGPA is required'
        ];
    }
}
