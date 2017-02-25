@extends('adminlte::layouts.app')
{{$message=Session::get('message')}}
@section('htmlheader_title')

	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="panel">

	<div class="panel-heading col-sm-1 col-md-9">
    <h1 style="padding-left:0px; line-height:.5em;">Recuperacion de Empleados
			 <h5 class="text-rigth" style="padding-left:10px;">Aqui podras recuperar los empleados a los que has borrado recientemente.

			 </h5>		 </h1>
  </div>
	<div class="panel-heading col-md-3 text-right">
		<a href="{{URL('recuperar')}}">Recuperar un usuario Eliminado</a>
	</div>

<div class="input-group col-md-12">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
</div>
</div>


<div class="container-fluid buscar">
	@foreach ($EmpleadosVista as $Empleados)
	<div class="box box-solid  col-md-2 col-md-offset-1">
	  <div class="box-header with-border">
	    <h5 class="box-title text-center panel-primary">{{strtoupper($Empleados->nombre)}}</h5>
	  </div><!-- /.box-header -->

		<div class="row">
			<img src="{{URL::asset('img/FotosRegistro/1.jpg')}}" class="img-responsive sombras" alt="">
		</div>
		<div class="row tr">
	  <div class="box-body text-sm">
		 {{$Empleados->Cliente}}
 		 {{$Empleados->email}}<br>
 		 {{$Empleados->calle}}
 		 {{$Empleados->Colonia}}
 		 {{$Empleados->Num_Ext}}
 		 {{$Empleados->Num_Int}}
 		 {{$Empleados->CP}}
 		 {{$Empleados->Tel_Local}}
 		 {{$Empleados->Num_Cel}} <br>
 		 {{$Empleados->Depto}} <br>
		 </div>
		 </div>

		 <div class="text-center">
			 {!!Form::open(['route'=>['recuperar.destroy',$Empleados->id],'method'=>'Delete'])!!}
						<button type="submit" name="button" class="glyphicon glyphicon-trash text-center iconos text-red" style="background-color:transparent; border:0;">
			 {!!Form::close()!!}
		 </div>
		 <div class="text-center">
		 {!!Form::open(['route'=>['recuperar.destroy',$Empleados->id],'method'=>'PATCH'])!!}
					<button type="submit" name="button" class="glyphicon glyphicon-ok text-center iconos text-red" style="background-color:transparent; border:0;">
		 {!!Form::close()!!}
		 </div>
	  <!-- /.box-body -->

	</div><!-- /.box -->
	@endforeach
</div>
{!!$EmpleadosVista!!}
@endsection
