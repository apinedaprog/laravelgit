<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosCreateRequest extends FormRequest
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
          'Nombre'=> 'required',
          'app'=>'required',
          'usuario'=> 'required|unique:empleados',
          'password'=> 'required',
          'Num_Cel'=> 'required',
          'Mail_Pers'=> 'required',
          'Cargo'=> 'required',
          'Horario'=> 'required',
          'NumEmpleadoNom'=> 'required',
          'Depto'=> 'required',
          ];
    }
}
