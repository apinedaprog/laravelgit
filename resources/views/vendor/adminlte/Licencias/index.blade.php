@extends('adminlte::layouts.app')

@section('thmlheader_tittle')
{{trans('adminlte_lang::message.home')}}
@endsection





@section('main-content')
@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <ul>
    @foreach ($errors-> all() as $error)
      <li>{!!$error!!}</li>
    @endforeach
  </ul>
</div>
@endif





{!!Form::open() !!}
<div id="msj-succes" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>La Licencia se Coreo Correctamente</strong>
</div>
<h1>Licencias Disponibles</h1>
<input type="hidden" name="_token" value="{{csrf_token() }}" id="token">
<div class="form-group col-md-15 ">
{!!Form::text('licencia', null,['id'=>'licencias','class'=>'col-md-5 form-control','placeholder'=>'Ingrese su numero de Licencia'])!!}
{!!Form::label('numero_licencia','Registre una nueva licencia')!!}
</div>
{!!Link_to('#',$title='Registrar', $attributes = ['id'=>'Nuevo', 'class'=>'btn btn-primary'], $secure = null)!!}
{!!Form::close()!!}












@foreach ($LicenciaVista as $licencia)
<?php
  $color = rand( 000000, 999999);
 ?>
<div class="container col-md-6 row">
	<div class="box box-solid  col-md-10 col-md-offset-1">
	  <div class="box-header with-border">
	    <h5 class="box-title text-center panel-primary">Numero de Licencia: {{$licencia->NumeroLicencia}}</h5>
	  </div><!-- /.box-header -->

		<div class="row col-xs-3">
			<i class="glyphicon glyphicon-credit-card vertical-center " style="font-size:8em; color:#<?php echo $color; ?>;" aria-hidden="true"></i>
		</div>
		<div class="row tr">
	  <div class="box-body text-sm col-md-4">
      <strong>Fecha de creacion: </strong> <p>{{$licencia->created_at}}</p>
   </div>
   <div class="box-body text-sm col-md-4">
     <strong>Estatus de Licencia</strong>
     @if($licencia->estatus == 1 )
     <p>
       {{"Asignada a $licencia->empleado"}}
     </p>

      @elseif($licencia->estatus == 2 )

      {{"Asignada a $licencia->empleado en chkte movil"}}


       @else
        <p>
          {{"Disponible"}}

        </p>
    @endif

  </div>
  <div class="box-body text-sm col-md-4">
    Aqui va toda la informacion
 </div>
 <div class="box-body text-sm col-md-4">
   Aqui va toda la informacion
</div>

		 </div>

		 <div class="text-center">
			 {{link_to_route('empleados.edit', $title = '', $attributes = ['class'=>'col-sm-6 glyphicon glyphicon-pencil text-center iconos'])}}

		 </div>

	  <!-- /.box-body -->

	</div><!-- /.box -->

</div>
@endforeach

{!!$LicenciaVista!!}

@endsection
