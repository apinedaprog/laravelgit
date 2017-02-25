@extends('adminlte::layouts.app')
{{$message=Session::get('message')}}
@section('htmlheader_title')

	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="panel">
	<div class="panel-heading col-md-1">
		<a href="{{url('usuario/sistema/create')}}" class="IconMenu"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
	</div>
	<div class="panel-heading col-sm-1 col-md-8">
    <h1 style="padding-left:0px; line-height:.5em;">Control de Usuarios
			 <h5 class="text-rigth" style="padding-left:10px;">Alta, edición y eliminación de empleados.
			 </h5>

		 </h1>
  </div>
	<div class="panel-heading col-md-3 text-right">
		<a href="{{URL('usuario/recuperar')}}">Recuperar un usuario Eliminado</a>
	</div>

<div class="input-group col-md-12">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
</div>
</div>


<div class="container-fluid buscar">
	@foreach ($EmpleadoVista as $Empleados)
	<div class="box box-solid  col-md-2 col-md-offset-1">
	  <div class="box-header with-border">
	    <h5 class="box-title text-center panel-primary">{{strtoupper($Empleados->usuario)}}</h5>
	  </div><!-- /.box-header -->

		<div class="row">
			<img src="{{URL::asset('img/FotosRegistro/1.jpg')}}" class="img-responsive sombras" alt="">
		</div>
		<div class="row tr">
	  <div class="box-body text-sm">
		 {{$Empleados->Cliente}}
 		 {{$Empleados->usuario}}<br>

		 </div>
		 </div>

		 <div class="text-center">
			 {{link_to_route('empleados.edit', $title = '', $parameters = $Empleados->id, $attributes = ['class'=>'col-sm-6 glyphicon glyphicon-pencil text-center iconos'])}}



			 {!!Form::open(['route'=>['empleados.destroy',$Empleados->id],'method'=>'DELETE'])!!}
			<button type="submit" name="button" class="glyphicon glyphicon-trash text-center iconos text-red" style="background-color:transparent; border:0;">
			 {!!Form::close()!!}





		 </div>

	  <!-- /.box-body -->

	</div><!-- /.box -->
	@endforeach
</div>
<!-- {!!$EmpleadoVista!!} -->
@endsection
