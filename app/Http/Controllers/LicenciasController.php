<?php

namespace App\Http\Controllers;
use App\Http\Requests\LicenciasRequest;
use Illuminate\Http\Request;
use App\Licencias;
use Session;

class LicenciasController extends cuentasPruebaController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      cuentasPruebaController::conexion();
      $licencia=Licencias::paginate(10);
      return view('adminlte::licencias.index',array('LicenciaVista'=>$licencia));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenciasRequest $request)
    {
      if($request->ajax()){
        Licencias::create($request->all());

        return  response()->json([
          "mensaje" => "creado"
        ]);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
