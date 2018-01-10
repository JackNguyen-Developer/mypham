<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegisterFrontendRequest extends FormRequest
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
            'phone'=>'required|numeric|min:6',
            'address'=>'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên người dùng .',

            'phone.required'  => 'Vui lòng nhập số điện thoại .',
            'phone.numeric'  => 'Số điện thoại phải là số .',
            'phone.min'  => 'Số điện thoại phải 6 số trở lên .',


            'address.required'  => 'Vui lòng nhập địa chỉ của bạn .',
        ];
    }
}
