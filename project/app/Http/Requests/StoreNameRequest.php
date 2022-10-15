<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          //  'nameSurname' => 'required|min:2|max:50|regex:/^[A-Za-z-]+$/',
            'nameSurname' => 'required',
            'nameSurname' => 'min:2'
        ];

        
        
    }
    public function messages()
{
    return [
        'nameSurname.min' => 'low characters',
        'nameSurname.required' => 'field is empty (required)',
        'nameSurname.max' => 'too much...'
    ];
}
}
