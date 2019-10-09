<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignRequest extends FormRequest
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
            'name' => 'required',
            'unit' => 'required',
            'main_position' => 'required',
            'phone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名 不能为空',
            'unit.required' => '企业名称 不能为空',
            'main_position.required' => '职务 不能为空',
            'phone.required' => '联系电话 不能为空'
        ];
    }
}

