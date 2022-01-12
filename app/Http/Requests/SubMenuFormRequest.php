<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubMenuFormRequest extends FormRequest
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
            //
            'sub_menu' => 'required',
            'sub_menu_ulr' => 'required',
            'sub_menu_slug' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'sub_menu.required' => 'We need the name',
            'sub_menu_ulr.required' => 'We need url also',
            'sub_menu_slug.required'  => 'slugs are a good practice',
        ];
    }
}
