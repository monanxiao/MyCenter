<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServieRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:150',
            'describe' => 'required|max:150',
            'price' => 'required|min:0.00',
            'guarantee' => 'nullable|array',
            'ytd' => [
                'required',
                Rule::in(['year', 'month']),
            ]
        ];
    }
}
