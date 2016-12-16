<?php

namespace Xstore\Http\Requests;
use Xstore\Models\TaUser;
use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'address' => 'required|min:8',
            'idcard' => 'required|min:8',
            'dob' => 'required|min:8',
            'email' => 'required|Between:3,64|email|unique:ta_user',
            'password' => 'required|min:8',
            'sex' => 'required|min:1',
            'status' => 'required|min:1',
            'active' => 'required|min:1',
            'district' => 'required|min:1',
            'roll' => 'required|min:1',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập họ và tên lót.',
            'name.min' => 'Bạn phải nhập ít nhất 8 ký tự.',
            'name.max' => 'Bạn có thể nhập nhiều nhất 30 ký tự.',

            'address.required' => 'Bạn chưa nhập địa chỉ.',
            'idcard.required' => 'Bạn chưa nhập chứng minh thư.',
            'idcard.integer' => 'Chứng minh thư phải là số.',
            'dob.required' => 'Bạn chưa nhập ngày sinh.',

            'email.required' => 'Bạn chưa nhập Email',
            'email.email' => 'Email không đúng định dạng, vui lòng kiểm tra lại.',
            'email.unique' => 'Email đã được đăng ký, vui lòng chọn email khác.',
            'email.between' => 'Độ dài email từ 3 - 64 ký tự',

            'password.required' => 'Bạn chưa nhập mật khẩu.',
            'password.confirmed' => 'Bạn chưa nhập mật khẩu xác nhận',
            'sex.required' => 'Bạn chưa chọn giới tính.',
            'status.required' => 'Hãy chọn trạng tài khoản.',
            'active.required' => 'Chọn kích hoạt cho tài khoản.',

            'districts.required' => 'Vui lòng chọn quận',
            'districts.unique' => 'Quận/Huyện không có trong danh sách.',

            'roll.required' => 'Bạn chưa quyền cho user.',
        ];
    }
}
