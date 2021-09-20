<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo_img' => 'nullable|mimes:png,jpg,jpeg|dimensions:min_width=208,min_height=208',
            'link' => 'required|url|max:150',
            'description' => 'required|max:150',
        ];
    }
}
