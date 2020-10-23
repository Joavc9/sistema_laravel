<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'image' => 'image',
            'identification_number' => 'required|numeric|unique:clients,identification_number,' . $this->id,
            'email' => 'required|email|unique:clients,email,' . $this->id,
            'phone' => 'required|numeric',
            'observations' => 'required|min:3|max:100',
        ];
    }
    /**
     * Get the attributes
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.min' => 'El :attribute debe ser mayor a :min caracteres',
            'name.max' => 'El :attribute no debe ser mayor a :max caracteres',
            'image.required' => 'Seleccione un archivo para cargar la :attribute',
            'image.image' => 'El archivo debe ser una :attribute',
            'image.dimensions' => 'La :attribute debe tener las siguientes dimensiones de Alto: 706 y de Ancho: 421',
            'image.mimes' => 'La :attribute debe ser de tipo: PNG',
            'identification_number.required' => 'La :attribute es obligatorio',
            'identification_number.numeric' => 'La :attribute debe ser de tipo númerico',
            'identification_number.unique' => 'El :attribute ya se encuentra registrado',
            'email.required' => 'El :attribute es obligatorio',
            'email.email' => 'El :attribute debe ser un correo válido',
            'email.unique' => 'El :attribute ya se encuentra registrado',
            'phone.required' => 'El :attribute es obligatorio',
            'phone.numeric' => 'El :attribute debe ser de tipo númerico',
            'observations.required' => 'La :attribute es obligatorio',
            'observations.min' => 'La :attribute debe ser mayor a :min caracteres',
            'observations.max' => 'La :attribute no debe ser mayor a :max caracteres',

        ];
    }
    /**
     * Get the attributes
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => "nombre del cliente",
            'image' => 'imagen',
            'identification_number' => 'cédula',
            'email' => 'Correo',
            'phone' => "teléfono",
            'observations' => "observaciones"
        ];
    }
}
