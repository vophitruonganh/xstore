<?php

namespace Xstore\Http\Requests;
use Xstore\Models\TaProduct;
use Xstore\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'name' => 'required|min:5',
            'url' => 'required|min:5|max:255',
            'price' => 'required|min:5',
            'sale' => 'required|min:1',
            'status' => 'required|min:1',
            'active' => 'required|min:1',
            'trademark' => 'required|min:1',
        ];
    }

    public function messages(){
       return [
            'name.required' => 'Vui lòng nhập thông tin.',
            'name.min' => 'Nội dung quá ngắn',
            // 'name.unique' => 'Thông tin này đã được sử dụng',

            'url.required' => 'Vui lòng nhập thông tin.',
            'url.min' => 'Nội dung quá ngắn',
            // 'url.max' => 'Nội dung quá dài',

            'price.required' => 'Vui lòng nhập thông tin.',
            'price.min' => 'Nội dung quá ngắn',
            'price.max' => 'Nội dung quá dài',
            // 'price.integer' => 'Thông tin nhập vào phải là số',

            'sale.required' => 'Vui lòng nhập thông tin.',
            'sale.min' => 'Nội dung quá ngắn',

            'status.required' => 'Vui lòng nhập thông tin.',
            'status.min' => 'Nội dung quá ngắn',

            'active.required' => 'Vui lòng nhập thông tin.',
            'active.min' => 'Nội dung quá ngắn',

            'trademark.required' => 'Vui lòng nhập thông tin.',
            'trademark.min' => 'Nội dung quá ngắn',
        ];
    }
}
