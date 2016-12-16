<?php

namespace Xstore\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUploadFile extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(){
        return [
            'image.requiure' => 'Bạn chưa chọn file để upload',
            'image.image' => 'File bạn chọn không phải là file hình',
            'image.mimes' => 'Định dạng hình của bạn không hợp lệ',

        ];
    }
}
