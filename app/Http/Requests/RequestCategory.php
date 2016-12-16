<?php

namespace Xstore\Http\Requests;
use Xstore\Models\TaCategory;
use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name' => 'required|min:5|unique:category',
            'url' => 'required|min:5|unique:category',
            'image' => 'required|min:5',
            'active' => 'required|min:1',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập thông tin',
            'name.min' => 'Độ dài it nhất là 5 ký tự',
            'name.unique' => 'Danh mục này đã được khởi tạo',

            'url.required' => 'Vui lòng nhập thông tin',
            'url.min' => 'Độ dài it nhất là 5 ký tự',
            'url.unique' => 'Danh mục này đã được khởi tạo',

            'image.required' => 'Vui lòng nhập thông tin',
            'image.min' => 'Độ dài it nhất là 5 ký tự',

            'active.required' => 'Vui lòng nhập thông tin',
            'active.min' => 'Độ dài it nhất là 5 ký tự',
        ];
    }
}
