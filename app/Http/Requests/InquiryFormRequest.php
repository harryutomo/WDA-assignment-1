<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class InquiryFormRequest extends FormRequest
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
            'user_name' => 'required|max:255',
            'user_email' => 'required|email|max:255',
            'os' => 'required|max:255',
            'software_issue' => 'required',
            'status' => 'required',

        ];
    }
}