<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname' => "required",
            'lastname' => "required",
            'email' => "required|email",
            'tel' => "required",
            'sujet' => "required",
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => "Vous avez oublié votre nom",
            'lastname.required' => "vous avez oublié votre prénom",
            'email.required' => "vous avez oublié votre email",
            'tel.required' => "veuillez entrer un numero de téléphone",
            'sujet.required' => "Pourquoi nous contactez-vous ?",
        ];
    }
}
