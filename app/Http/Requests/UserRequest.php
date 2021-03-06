<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
            'name' => 'required|between:2,25|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9-_]+$/u|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=208,min_height=208',
        ];
    }

    public function messages()
    {
        return [
            'avatar.mimes' =>'messages Head format',
            'avatar.dimensions' => 'messages Picture sharpness',
            'name.unique' => 'messages name unique',
            'name.regex' => 'messages name regex',
            'name.between' => 'messages name between',
            'name.required' => 'messages name required',
        ];
    }
}
