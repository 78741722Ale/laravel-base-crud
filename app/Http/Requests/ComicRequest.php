<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* Deve ritornare valore true altrimenti da valore "non autorizzato" */
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
                'title' => 'required|max:50',
                'author' => 'required',
                'info' => 'required|max:100',
                'cover_image' => 'required',
                'price' => 'required',
                'release' => 'required',
        ];
    }
}
