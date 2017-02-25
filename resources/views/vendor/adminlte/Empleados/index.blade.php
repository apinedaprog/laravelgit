@extends('adminlte::layouts.app')
{{$message=Session::get('message')}}
@section('htmlheader_title')

	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="panel">
	<div class="panel-heading col-md-1">
		<a href="{{url('empleados/create')}}" class="IconMenu"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
	</div>
	<div class="panel-heading col-sm-1 col-md-8">
    <h1 style="padding-left:0px; line-height:.5em;">Control de Empleados
			 <h5 class="text-rigth" style="padding-left:10px;">Alta, edición y eliminación de empleados.
				 <span class="glyphicon glyphicon-info-sign text-red" onmouseover="showdiv(event);" onmousemove="showdiv(event);" onmouseout="javascript:document.getElementById('flotante').style.display='none';"></span>

			 </h5>
			 <div id="flotante">
				 <h4>Ayuda para el Usuario</h4>
				 <p>Aqui podras dar de registrar, editar o eliminar los registros de los empleados dados de alta.</p>
				 <p>Para Editar un registro solo deberas hacer clic en el icono <span class="glyphicon glyphicon-pencil text-center"></span> que se encuentra en su ficha tecnica</p>
				 <p>Para Eliminar un registro solo deberas hacer clic en el icono <span class="glyphicon glyphicon-trash text-center"></span> que se encuentra en su ficha tecnica</p>
				 <p>Para Crear un nuevo registro solo deberas hacer clic en el icono <span class="fa fa-user-plus text-center"></span> que se encuentra aqui a lado</p>
			 </div>
		 </h1>
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
 		 No.Ext {{$Empleados->Num_Ext}}
 		 No. Int {{$Empleados->Num_Int}}
 		 C.P. {{$Empleados->CP}}
 		 {{$Empleados->Tel_Local}}
 		 {{$Empleados->Num_Cel}} <br>
 		 {{$Empleados->Depto}} <br>
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
{!!$EmpleadosVista!!}
@endsection
