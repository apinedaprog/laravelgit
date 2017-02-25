<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{




  protected $guard = 'pruebas';






    public function index()
    {
        return view('adminlte::auth.login');
    }







    public function store(LoginRequest $request)
    {

    $usuario = "chkte@chkte.com";
    $password = "123456";

    if (Auth::user(['usuario' => $usuario])) {
             // Authentication passed...
             return 'Usuario Correcto';
         }

         return ['Usuario Incorrecto',$usuario,bcrypt($password)];

}
}
