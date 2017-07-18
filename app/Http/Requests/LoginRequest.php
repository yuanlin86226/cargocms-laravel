<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required'
        ];
    }

    /**
     * 自定義錯誤訊息
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => '請輸入完整',
            'email' => '格式錯誤'
        ];
    }
}
