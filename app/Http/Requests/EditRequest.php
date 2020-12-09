<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'maso' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'manager' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'maso.required' => 'Mã đại lý không được để trống',
            'name.required ' => 'Tên đại lý không được để trống  ',
            'phone.required ' => 'Số điện thoại  không được để trống  ',
            'email.required  ' => 'Email không được để trống  ',
            'address.required' => 'Địa chỉ không được để trống ',
            'manager.required' => 'Tên người quản lý  không được để trống ',
        ];
    }
}
