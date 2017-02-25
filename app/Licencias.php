<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class Licencias extends Model
{



protected $connection = "clientes";

protected $table = "registrolicencias";


protected $fillable =[
    'NumeroLicencia',
      ];




}
