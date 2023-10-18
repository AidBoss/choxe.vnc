<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:255|unique:users',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }
    public function messages(): array
    {
        return [
            'name.min' => 'Tên tài khoản phải lớn hơn :min',
            'name.required' => 'Tên tài khoản không được để trống ',
            'email.required' => 'Email không được để trống ',
            'name.unique' => 'Tên tài khoản đã tồn tại!',
            'phone.required' => 'Số điện thoại không được để trống ',
            'phone.digits' => 'Số điện thoại phải tối thiểu 10 số ',
            'password.required' => 'Mật khẩu không được để trống ',
            'password.min' => 'Mật khẩu phải lớn hơn :min',
        ];
    }
}
