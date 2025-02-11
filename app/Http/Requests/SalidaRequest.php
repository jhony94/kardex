<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalidaRequest extends FormRequest
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
            'mov_factura' => 'required|numeric',
            'idhcliente' => 'required',
        ];
    }

    public function attributes(){
        return [
            'mov_factura' => 'Factura',
            'idhcliente' => 'Nombre del Cliente',
        ];
    }
}
