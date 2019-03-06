<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoininRequest extends FormRequest
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
            'name'             => 'required|regex:/^[\x{4e00}-\x{9fa5}]+$/u|max:5',
            'mobile'           => 'required|between:11,11|regex:/^1[34578][0-9]{9}$/',
            'address'          => 'required|regex:/^[\x{4e00}-\x{9fa5}]+$/u',
            'product'          => '',
            'telephone'        => '',
            'fax'              => '',
            'code'             => '',
            'email'            => 'required|email',
            'message'          => 'required|max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.regex'            => '联系人格式不正确',
            'name.required'         => '联系人不能为空',
            'mobile.required'       => '手机号码不能为空',
            'mobile.between'        => '手机号码出错',
            'email.required'        => '邮箱不能为空',
            'email.email'           => '邮箱不能为空',
            'message.required'      => '未有留言内容！',
            'message.max'           => '留言内容字数太多了，只能写80个字',
        ];
    }
}
