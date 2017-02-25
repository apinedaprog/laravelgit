<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadosCreateRequest;
use Illuminate\Http\Request;
use App\Empleados;
use Session;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $empleados=Empleados::paginate(10);
      return view('adminlte::empleados.index',array('EmpleadosVista'=>$empleados));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadosCreateRequest $request)
    {
        \App\Empleados::create([
        'nombre'=>$request['Nombre']." ".$request['app']." ".$request['Apm'],
        'Cliente'=>"ZUNFELD DIGITAL SA DE CV",
        'usuario'=>$request['usuario'],
        'password'=>bcrypt($request['password']),
        'Sexo'=>$request['Sexo'],
        'Fech_Nac'=>$request['Fech_Nac'],
        'RFC'=>$request['RFC'],
        'CURP'=>$request['CURP'],
        'NSS'=>$request['NSS'],
        'Estados'=>$request['Estados'],
        'Municipios'=>$request['Municipios'],
        'Colonia'=>$request['Colonia'],
        'Calle'=>$request['Calle'],
        'Num_Ext'=>$request['Num_Ext'],
        'Num_Int'=>$request['Num_Int'],
        'CP'=>$request['CP'],
        'Num_Cel'=>$request['Num_cel'],
        'Tel_Loc'=>$request['Tel_Loc'],
        'Mail_Emp'=>$request['email'],
        'Mail_Pers'=>$request['Mail_Pers'],
        'Cargo'=>$request['Cargo'],
        'Salario'=>$request['Salario'],
        'Horario'=>$request['Horario'],
        'FotoEmpleado'=>"PENDIENTE",
        'statusQR'=>'true',
        'LocContinua'=>'false',
        'timeLocCon'=>$request['timeLocCon'],
        'NumEmpleadoNom'=>$request['NumEmpleadoNom'],
        'Depto'=>$request['Depto'],
        'periodopago'=>$request['periodopago'],
        'diasLaborados'=>$request['diasLaborados'],
        'EnviarAlertas'=>"NO",
        
      ]);

      return redirect('/empleados')->with('message','store');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados=Empleados::find($id);
        return view('adminlte::empleados.Edit',['Empleado'=>$empleados]);
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleados=Empleados::find($id);
        $empleados->fill($request->all());
        $empleados->save();
        return Redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $empleados=Empleados::find($id); //Recuperas el Id que se va a Eliminar
      $empleados->delete(); // Llamas al Metodo Delete
      Session::flash('message','El usuario se Elimino Correctamente');
      return Redirect('/empleados');
    }
}
