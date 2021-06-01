<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganisation extends FormRequest
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
            'nom' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|min:10|max:15',
            'adresse' => 'required|min:3|max:500',
            'web_site' => 'required|min:3|max:500',
        ];
    }
}
