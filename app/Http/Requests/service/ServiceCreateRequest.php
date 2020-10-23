<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'service_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'observations' => 'required|min:3|max:100',
        ];
    }
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
            'service_type.required' => 'El :attribute es obligatorio',
            'start_date.required' => 'La :attribute es obligatorio',
            'end_date.required' => 'La :attribute es obligatorio',
            'observations.required' => 'La :attribute es obligatorio',
            'observations.min' => 'La :attribute debe ser mayor a :min caracteres',
            'observations.max' => 'La :attribute no debe ser mayor a :max caracteres',

        ];
    }

    public function attributes()
    {
        return [
            'name' => "nombre del servicio",
            'image' => 'imagen',
            'service_type' => 'tipo servicio',
            'start_date' => 'fecha inicial',
            'end_date' => "fecha final",
            'observations' => "observaciones"
        ];
    }
}
