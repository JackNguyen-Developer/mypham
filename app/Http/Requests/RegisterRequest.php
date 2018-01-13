<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' =>'required',
            'email'=>'required|email|unique:users,email',
            // 'email'=>'required|email',
            'phone'=>'required|numeric|min:6',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
            'address'=>'required'

        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Vui lòng nhập tên người dùng .',

        'email.required'  => 'Vui lòng nhập email .',
        'email.email'  => 'Bạn phải nhập đúng định dạng email',
        'email.unique'  => 'Email này đã tồn tại trong hệ thống ',


        'phone.required'  => 'Vui lòng nhập số điện thoại .',
        'phone.numeric'  => 'Số điện thoại phải là số .',
        'phone.min'  => 'Số điện thoại phải 6 số trở lên .',


        'password.required'  => 'Vui lòng nhập password .',
        'password.min'  => 'Password thấp nhất phải 6 ký tự .',
        'repassword.required'  => 'Vui lòng nhập lại password .',
        'repassword.same'  => 'Password bạn nhập chưa khớp .',
        'address.required'  => 'Vui lòng nhập địa chỉ của bạn .',
    ];
}


}
