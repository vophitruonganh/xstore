<?php

namespace Xstore\Http\Requests;
use Xstore\Models\TaUser;
use Illuminate\Foundation\Http\FormRequest;

class RequestLogin extends FormRequest
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
            'email' => 'required|unique:ta_user',
            'password' => 'required|min:6',
        ];
    }
    public function messages(){
        return [
            'email.required' => 'Ban chua nhap email',
            'email.unique' => 'Email khong ton tai'
        ];
    }
}
