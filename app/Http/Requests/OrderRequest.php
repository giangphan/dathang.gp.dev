<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
        'maBienNhan' => 'required',
        'tenKhachHang' => 'required',
        'ngayDatHang' => 'required'
        ];
    }

    public function messages(){
        return [
            'maBienNhan.required' => 'Chưa điền mã biên nhận.',
            'tenKhachHang.required' => 'Chưa điền tên khách hàng',
            'ngayDatHang.required' => 'Chưa chọn ngày đặt hàng'
        ];
    }
}
