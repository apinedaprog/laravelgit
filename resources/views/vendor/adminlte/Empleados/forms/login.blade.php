@extends('adminlte::layouts.auth')

@section('content')
@include('adminlte::alerts.errors')
<div class="header-info">
{!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
<div class="form-group">
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su Usuario o Correo'])!!}
  {!!Form::label('Usuario','Usuario o Correo electronico')!!}
</div>
<div class="form-group">
  {!!Form::text('password',null,['class'=>'form-control','placeholder'=>'Ingrese su Contraseña'])!!}
  {!!Form::label('Password','Contraseña')!!}
</div>
{!!Form::submit('Iniciar sesion',['class'=>'btn btn-primary'])!!}
</div>
@endsection
