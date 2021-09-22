<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductionContentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'production_categorie_id' => 'required|exists:production_categories,id',
            'name' => 'required|regex:/\p{Han}/u',
            'link' => 'required|url|max:150',
            'describe' => 'required|max:150',
            'thumbnail' => 'mimes:png,jpg,gif,jpeg|dimensions:min_width=208,min_height=208'

        ];
    }
}
