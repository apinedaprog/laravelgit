<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Menu General -->
        <ul class="sidebar-menu">
          <!-- Titulo del Menu -->
            <li class="header">Menu de Interactividad</li>
            <!-- Vinculos de Menu -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
                <a href="{{ url('usuarios') }}"><i class='fa fa-user'></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{URL('usuarios/sistema')}}">Usuario Sistema</a></li>
                    <li><a href="{{URL('usuarios/app')}}">Usuario ChkteMovil</a></li>
                </ul>
            </li>
          <li class="active"><a href="{{ url('empleados') }}"><i class='fa fa-home'></i> <span>Empleados</span></a></li>


            <li class="treeview">
                <a href="#"><i class='fa fa-clock-o'></i> <span>Horarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Alta de Horarios</a></li>
                    <li><a href="#">Editar o Eliminar Horario</a></li>
                    <li><a href="#">Alta de Descuentos</a></li>
                    <li><a href="#">Editar de Descuentos</a></li>
                    <li><a href="#">Alta de Dia Festivo</a></li>
                    <li><a href="#">Editar Dia Festivo</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-bell'></i> <span>Correos para Alertas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Nuevo Correo para Alerta</a></li>
                    <li><a href="#">Editar correo Para Alerta</a></li>
                </ul>
            </li>

            <li class="active"><a href="{{ url('licencias') }}"><i class='fa fa-home'></i> <span>Registro de Licencias</span></a></li>

            <li class="treeview">
                <a href="#"><i class='fa fa-globe'></i> <span>Geo Cercas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Altas Geo Cercas</a></li>
                    <li><a href="#">Editar y Elimar </a></li>
                    <li><a href="#">Asignacion a Usuarios</a></li>
                </ul>
            </li>
            <li class="active"><a href="{{ url('ControlAsistencia') }}"><i class='fa fa-calendar'></i> <span>Control de Asistencia</span></a></li>
            <li class="active"><a href="{{ url('ExportarDatos') }}"><i class='fa fa-database'></i> <span>Exportar Datos</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-plus'></i> <span>Envio de Licencia</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">QR para configurar APP</a></li>
                    <!-- <li><a href="#">Editar o Eliminar Usuario</a></li>
                    <li><a href="#">Nuevo Usuario App</a></li> -->
                </ul>
            </li>
            <li class="active"><a href="{{ url('TarjetaQR') }}"><i class='fa fa-qrcode'></i> <span>Tarjeta QR</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
