<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFrontRequest extends FormRequest
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
        'email_lo' =>'required|email',
        'password_lo'=>'required|min:6'
            //
        ];
    }

    public function messages()
    {
        return [
        'email_lo.required'=>'Vui lòng nhập nhập email ...',
        'password_lo.required'=>'Vui lòng nhập nhập mật khẩu ...',
        'email_lo.email'=>'Vui lòng nhập nhập đúng định dạng email ...',
        'password_lo.min'=>'Mật khẩu phải lớn hơn 6 ký tự ...',


        ];
    }
}
