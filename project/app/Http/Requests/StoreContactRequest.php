<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'email' => ['required','unique:contacts,email','max:100','regex:/gmail|yahoo.com|myyahoo.com|proton.me|protonmail.com]/'],
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
        ];
    }
}
