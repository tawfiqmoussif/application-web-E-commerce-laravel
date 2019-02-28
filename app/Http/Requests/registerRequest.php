<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            
            'name'=>'required|string',
            'email'=>'unique:users|required',
            'password'=>'required',
            'Addresse'=>'required',
            'Ville'=>'required',
            'Code_postale'=>'required|integer',
            'Téléphone'=>'required',
            'password' => 'required|confirmed|min:6'
        ];
    }
}
