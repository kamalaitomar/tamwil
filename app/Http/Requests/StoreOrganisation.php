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
            'nom_ar' => 'required|min:3|max:255',
            'email' => 'max:255',
            'tel' => 'required|min:10|max:100',
            'adresse' => 'required|min:3|max:500',
            'adresse_ar' => 'required|min:3|max:500',
            'web_site' => 'required|min:3|max:500', 
            'type' => 'required|min:3|max:255', 
            'type_ar' => 'required|min:3|max:255', 
            'presentation' => 'required|min:3', 
            'presentation_ar' => 'required|min:3', 
            'logo' => 'required|min:3|max:255',
            'logofile' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
