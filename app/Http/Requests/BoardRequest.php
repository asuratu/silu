<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
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
            'name' => 'required|between:1,50',
            'address' => 'required|max:255',
            'body' => 'required',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名 不能为空',
            'name.between' => '姓名 必须介于 1 - 50 个字符之间',
            'address.required' => '地址 不能为空',
            'address.max' => '地址 最多 255 个字符',
            'body.required' => '留言 不能为空',
            '*.required_without' => '邮箱地址 和 手机号码 需要选填一项',
        ];
    }
}
