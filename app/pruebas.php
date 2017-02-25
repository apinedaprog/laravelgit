<?php

namespace App;
use Illuminate\Contracts\Routing\UrlRoutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pruebas extends Authenticatable
{
  protected $connection = "cuentas";

  protected $table = "usuariossistema";

  protected $fillable = [

    'usuario',
    'password',

  ];


  protected $hidden = [
      'password', 'remember_token',
  ];

  public function setPasswordAttributes($valor){
    if(!empty($valor)){
      $this->attributes['password']=\Hash::make($valor);
    }
  }

}
