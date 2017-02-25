@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')

<body class="hold-transition login-page">
    <div id="app" class="fondo">
        <div class="login-box" style="background-color:transparent">
            <div class="login-logo">
                <img class="logo-img" src="img/logo.png" alt="">
            </div><!-- /.login-logo -->
@include('adminlte::alerts.errors')
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Lo Sentimos</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="login-box-body " style="background-color:transparent">
          {!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group has-feedback">
              {!!Form::email('email', null, ['class'=>"form-control",
              'placeholder'=>'Ingresa tu Correo o usuario Chkte'])!!}
            </div>
            <div class="form-group has-feedback">
              {!!Form::password('password',['class'=>"form-control",
              'placeholder'=>'Ingresa tu Contraseña'])!!}
            </div>
          <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
          </div><!-- /.col -->
        {!!Form::close()!!}
        <a href="{{ url('/password/reset') }}"><strong>{{ trans('adminlte_lang::message.forgotpassword') }}</strong></a><br>
    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
