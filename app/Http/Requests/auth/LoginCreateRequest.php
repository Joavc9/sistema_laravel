<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginCreateRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    /**
     * Get the messages
     *
     * @return array
     */
    public function messages()
    {
        return[
            'email.required' => 'El córreo electronico debe ser obligatorio',
            'email.email' => 'El córreo electronico debe ser un córreo válido',
            'password.required' => 'La contraseña debe ser obligatoria',
            
        ];
    }
}
