<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
class RecuperarEmpleadosController extends Controller
{

    public function index()
    {
      $empleados=Empleados::onlyTrashed()->paginate(10);
      return view('adminlte::recuperar.index',array('EmpleadosVista'=>$empleados));
    }


    public function create()
    {

     }



    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $empleados=Empleados::find($id);
      return view('adminlte::empleados.Edit',['Empleado'=>$empleados]);
    }


    public function update(Request $request, $id)
    {
      \App\Empleados::withTrashed()
            ->where('id', $id)
            ->restore();
         return redirect('/empleados')->with('message','store');
    }


    public function destroy($id)
    {
      \App\Empleados::withTrashed()
            ->where('id', $id)
            ->forceDelete();
         return redirect('/empleados')->with('message','store');
    }
}
