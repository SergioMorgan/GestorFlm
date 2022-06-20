<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSite extends FormRequest
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
            'localid'   => 'required',
            'nombre'   => 'required',
            'zonal'     => 'required',
            'estado'    => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'localid' => 'ID de local',
        ];
    }

    public function messages()
    {
        return [
            'estado.required' => 'La descripcion no puede estar vacia',
        ];
    }
}
