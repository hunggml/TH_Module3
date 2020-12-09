<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyRequest extends FormRequest
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
            'maso' => 'required|unique:agency|numeric',
            'name' => 'required',
            'phone' => 'required|numeric|unique:agency',
            'email' => 'required|email|unique:agency',
            'address' => 'required',
            'manager' => 'required'
        ];

    }

    public function messages()
    {
        return [
            'maso.required' => 'Mã đại lý không được để trống',
            'maso.unique' => 'Mã đại lý đã tồn tại  ',
            'maso.numeric ' => 'Mã đại lý phải là số ',
            'name.required ' => 'Tên đại lý không được để trống  ',
            'phone.required ' => 'Số điện thoại  không được để trống  ',
            'phone.numeric  ' => 'Số điện thoại  phải là số    ',
            'phone.unique  ' => 'Số điện thoại  đã tồn tại    ',
            'email.required  ' => 'Email không được để trống  ',
            'email.email   ' => 'Làm ơn nhập email  ',
            'email.unique   ' => 'Email đã tồn tại  ',
            'address.required' => 'Địa chỉ không được để trống ',
            'manager.required' => 'Tên người quản lý  không được để trống ',
        ];
    }
}
