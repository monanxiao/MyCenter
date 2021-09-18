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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'nullable|max:300',
            'realname' => 'required|regex:/\p{Han}/u|between:2,5',
            'occupation' => 'nullable|string|max:30',
            'fredom' => 'boolean',
        ];
    }
}
