<?php

namespace produccion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
        //N=Nombre
        //A=Apellido
        //U=User
        //C=Password
        //D=Depto
        //P=Puesto
        //R=Rol
        return [
            'N'=>'required | max:20',
            'A'=>'required | max:50',
            'U'=>'required | max:15',
            'C'=>'required | max:20',
            'D'=>'required | max:20',
            'P'=>'required | max:30',
            'R'=>'required | max:20'
        ];
    }
}
