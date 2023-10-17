<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'ten' => 'required|min:2|max:255|',
            'gia' => 'required|',
            // 'list_anh' => 'required|', 
            'category_id' => 'required|',
            // 'xuatxu' => 'required|',
            // 'nhienlieu' => 'required|min:5|max:255|',
            'diachi' => 'required',
            'sochuxe' => 'required|min:10',
            'chuxe' => 'required|min:2|max:255| ',
        ];
    }
    public function messages(): array
    {
        return [
            'ten.required' => 'Tên xe không được để trống ',
            'gia.required' => 'Giá không được để trống ',
            // 'list_anh.required' => 'Ảnh không được để trống ',
            'category_id.required' => 'Hãng không được để trống ',
            'xuatxu.required' => 'Xuất xứ không được để trống ',
            'nhienlieu.required' => 'Nhiên liệu  không được để trống ',
            'diachi.required' => 'Địa chỉ không được để trống ',
            'sochuxe.required' => 'Số chủ xe không được để trống ',
            'chuxe.required' => 'Tên chủ xe không được để trống ',
        ];
    }
}
