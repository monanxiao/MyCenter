<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|between:3,25|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'nullable|max:300',
            'realname' => 'required|string|between:2,5',
            'occupation' => 'nullable|string|max:30',
            'fredom' => 'boolean',
            'avatar' => 'mimes:png,jpg,gif,jpeg|dimensions:min_width=208,min_height=208'
        ];
    }

    public function messages()
    {
        return [
            'avatar.mimes' =>'头像必须是 png, jpg, gif, jpeg 格式的图片',
            'avatar.dimensions' => '图片的清晰度不够，宽和高需要 208px 以上',
            'name.unique' => '用户名已被占用，请重新填写',
            'name.regex' => '用户名只支持英文、数字、横杠和下划线。',
            'name.between' => '用户名必须介于 3 - 25 个字符之间。',
            'name.required' => '用户名不能为空。',
        ];
    }
}
