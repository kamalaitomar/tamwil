<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOffre extends FormRequest
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
            'fascicule' => 'required|min:3|max:255',
            'objet' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:500',
            'condition' => 'required|min:3|max:500',
            'mantont' => 'required|min:0',
            
            'profils' => 'required|array',
            'profils.*' => 'integer|exists:profils,id',
            'cycles' => 'required|array',
            'cycles.*' => 'integer|exists:cycles,id',
            'besoins' => 'required|array',
            'besoins.*' => 'integer|exists:besoins,id',
            'organisations' => 'required|array',
            'organisations.*' => 'integer|exists:organisations,id',
        ];
    }
}
