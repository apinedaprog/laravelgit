@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
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

{!!Form::open(['route'=>'empleados.store','method'=>'POST'])!!}
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Datos Personales</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
		<div class="form-group col-md-4 ">
				{!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Nombre','Nombre')!!}
		</div>
		<div class="form-group col-md-4 ">
				{!!Form::text('app',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('App','Apellido Paterno')!!}
		</div>
		<div class="form-group col-md-4 ">
				{!!Form::text('Apm',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Apm','Apellido Materno')!!}
		</div>
		<div class="form-group col-md-4 ">
				{!!Form::text('Numero_Licencia',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('t_licencia','Licencia Chkte')!!}
		</div>
		<div class="form-group col-md-4 ">
				{!!Form::text('Numero_Licencia',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('t_licencia','Tipo de Licencia')!!}
		</div>

		<div class="form-group col-md-4 ">
				{!!Form::date('Fech_Nac',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Fecha de Nacimiento','Fecha de Nacimiento')!!}
		</div>

		<div class="form-group col-md-4 ">
				{!!Form::text('Sexo',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Sexo','Sexo')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::number('Tel_Loc',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario','maxlenght'=>10])!!}
				{!!Form::label('Telefono Local','Telefono Local')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::number('Num_Cel',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario','maxlenght'=>10])!!}
				{!!Form::label('Telefono Celular','Telefono Celular')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::email('Mail_Pers',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Correo Personal','Correo Personal')!!}
		</div>

	<div class="form-group col-md-4 ">
			{!!Form::Text('RFC',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('RFC','RFC')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('NSS',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('NSS','NSS')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('CURP',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('CURP','CURP')!!}
	</div>
  </div><!-- /.box-body -->
</div><!-- /.box -->

<div class="box box-info collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Direccion</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
		<div class="box-header"><h2></h2></div>
		<div class="form-group col-md-4">
				{!!Form::text('Calle',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Calle','Calle')!!}
		</div>
		<div class="form-group col-md-2">
				{!!Form::text('Num_Ext',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Numero_Exterior','Numero Exterior')!!}
		</div>
		<div class="form-group col-md-2">
				{!!Form::text('Num_Int',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Numero_Interior','Numero Interior')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::text('Colonia',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Colonia','Colonia')!!}
		</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('CP',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('C.p','Codigo Postal')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('Municipios',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('Municipio','Municipio')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('Estados',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('Estado','Estado')!!}
	</div>
  </div><!-- /.box-body -->
</div>



<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Datos del Puesto</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
		<div class="form-group col-md-4">
				{!!Form::text('NumEmpleadoNom',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Numero_Nomina','Numero de Nomina')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::text('Depto',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Departamento','Departamento')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::text('Cargo',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Cargo','Cargo')!!}
		</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('diasLaborados',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('Das_labora','Dias Laborados')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('Horario',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('Horario','Horario')!!}
	</div>
	<div class="form-group col-md-4 ">
			{!!Form::text('Salario',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
			{!!Form::label('Salario','Salario')!!}
	</div>

  </div><!-- /.box-body -->
</div>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Datos de Sesion</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
		<div class="form-group col-md-4">
				{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Usuario','Usuario - Correo Empresarial')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('pass','Contraseña')!!}
		</div>

  </div><!-- /.box-body -->
</div>
{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
 {{link_to_route('empleados.index', $title = 'Cancelar', $attributes = ['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection
