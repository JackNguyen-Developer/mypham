<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordFrontendRequest extends FormRequest
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
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',

            //
        ];
    }


    public function messages()
{
    return [


        'password.required'  => 'Vui lòng nhập password .',
        'password.min'  => 'Password thấp nhất phải 6 ký tự .',
        'repassword.required'  => 'Vui lòng nhập lại password .',
        'repassword.same'  => 'Password bạn nhập chưa khớp .',
    ];
}

}
