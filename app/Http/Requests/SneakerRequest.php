<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SneakerRequest extends FormRequest
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
            'name'         => 'required|min:4',
            'description'    => 'required',
            'release'        => 'required',
            'price'        => 'required|min:2',
            'sport'        => 'required|min:4',
            'colorway'        => 'required|min:4',
            'size'        => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> ':attribute is required.',
            'name.min' => ':attribute must have 4 characters at least.',
            'brand.required'=> ':attribute is required.',
            'description.required'=> 'La :attribute es requerida.',
            'release.required'=> ':attribute is required.',
            'price.required'=> ':attribute is required.',
            'price.min'    => ':attribute must have 2 digits at least.',
            'sport.required'=> ':attribute is required.',
            'sport.min'    => ':attribute must have 4 characters at least.',
            'colorway.required'=> ':attribute is required.',
            'colorway.min'    => ':attribute must have 4 characters at least.',
            'size.required'=> ':attribute is required.',
            'size.min'    => ':attribute must have 2 digits at least.'
        ];
    }

    public function attributes()
    {
        return [
            'name'     => 'Name of the sneakers',
            'brand'    => 'Brand of the sneakers',
            'description' => 'Description of the sneakers',
            'release' => 'Release date of the sneakers',
            'price' => 'The price of the sneakers',
            'sport' => 'The sport you can practice',
            'color' => 'Colorway of the sneakers',
            'size' => 'Size of the sneakers'

        ];
    }
}
