<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\pruebas;
use App\Http\Requests\LoginGeneralRequest;
use Auth;
use Session;
use Redirect;

class cuentasPruebacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conexion(LoginGeneralRequest $request)
    {
            $usuario = $request->email;
            $pass = $request->password;
          if ($usuario != 'Null' || $pass != 'Null') {
                  return Redirect::to('adminlte::home');
            }
          Session::flash('message-error','Datos incorrectos');
          return Redirect::to('login');










    //   if(Auth::attempt(['usuario' => $request['email'],'password' => $request['password']])){
    //
    //
    //   }
    //   Session::flash('message-error','Los Datos son incorrectos');
    //   return Redirect::to('/login');
    //
    //   $mail = $request->email;
    // $datosbase = pruebas::all()->where('usuario','programacion@zunfeld.com');
    //
    // foreach ($datosbase as $dato) {
    //   config(['database.connections.clientes.database'=> $dato->basedatos ]);
    //   config(['database.connections.clientes.username'=> $dato->usuariobd]);
    //   config(['database.connections.clientes.password'=> $dato->passwordbd]);
    // }
    //       $value = config('database.connections.clientes');
    //       return $value;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


      public function vista()    {
      return view('adminlte::auth.login');
      }
}
