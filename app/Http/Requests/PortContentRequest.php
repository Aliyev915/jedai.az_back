<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortContentRequest extends FormRequest
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
            'lang'      => 'integer',
            'title'         => 'required|string|max:255',
            'project_name'    => 'required|string|max:200',
            'image'         => 'image|max:500',
            'image_mob'   => 'image|max:500',
            'url'       => 'required|max:255',
            'sort'       => 'required|integer',
            'color_code'  => 'required|string|max:30'
        ];
    }
}
