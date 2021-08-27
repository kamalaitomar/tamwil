<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
            'titleFr' => 'required|min:3|max:255',
            'titleAr' => 'required|min:3|max:255',
            'articleFr' => 'required|array|min:3',
            'articleAr' => 'required|array|min:3',
            'articleFr.blocks' => 'required|array',
            'articleAr.blocks' => 'required|array'
        ];
    }
}
