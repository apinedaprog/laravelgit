@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

{!!Form::model($Empleado,['route'=> ['empleados.update',$Empleado->id],'method'=>'PUT'])!!}

<div class="panel panel-info ">
  <div class="panel-heading text-center"><h2>{{$Empleado->nombre}}</h2></div>
  <div class="panel-body">
		<div class="box-solid col-md-2" >
    <img src="/img/FotosRegistro/1.jpg" class="img-responsive" alt="">
		</div>
		<div class="box-solid col-md-8" >
    	<h2><p>{{$Empleado->Cliente}}</p></h2>
		</div>
		<div class="box-solid box-primary col-md-10" >
    	<h3><p>{{$Empleado->email}}</p></h3>
		</div>
		<div class="box-solid col-md-2" >
    	<span>Fecha de Registro</span><p>{{$Empleado->Fech_Reg}}</p>
		</div>
		<div class="box-solid col-md-2" >
    	<span>Ultima actualizacion</span><p>{{$Empleado->Fech_UltAct}}</p>
		</div>


  </div>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Datos Personales</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
		<div class="form-group col-md-4 ">
				{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Nombre','Nombre')!!}
		</div>
		<div class="form-group col-md-4 ">
				{!!Form::text('Sexo',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Sexo','Sexo')!!}
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
				{!!Form::text('Tel_Loc',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Telefono Local','Telefono Local')!!}
		</div>
		<div class="form-group col-md-4">
				{!!Form::text('Num_Cel',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
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

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Direccion</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
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
				{!!Form::text('Colonia',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Colonia','Colonia')!!}
		</div>
		<div class="form-group col-md-2">
				{!!Form::text('Num_Int',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('Numero_Interior','Numero Interior')!!}
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
		<div class="box-header"><h2></h2></div>
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
			{!!Form::number('Salario',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
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
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario'])!!}
				{!!Form::label('pass','Contraseña')!!}
		</div>

  </div><!-- /.box-body -->
</div>
{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
 {{link_to_route('empleados.index', $title = 'Cancelar', $attributes = ['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
