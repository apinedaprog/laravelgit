<head>
    <meta charset="UTF-8">
    <title>Mejor Chkte - @yield('htmlheader_title', 'Mejor Chkte') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/licenciasacciones.js">

    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    /*order ok: link,visited,hover,active*/


    #flotante
    {
      line-height: .5em;
      width: 50%;
      animation: all .5s;
    	display:none;
    	font-family:Arial;
      padding: 20px;
    	font-size:0.8em;
    	background-color:rgba(255, 153, 0, 0.5);
    }
    </style>
    <script type="text/javascript">
    <!--
    //Funcion que muestra el div en la posicion del mouse
    function showdiv(event)
    {
    	//determina un margen de pixels del div al raton
    	margin=5;

    	//La variable IE determina si estamos utilizando IE
    	var IE = document.all?true:false;
    	//Si no utilizamos IE capturamos el evento del mouse
    	if (!IE) document.captureEvents(Event.MOUSEMOVE)

    	var tempX = 0;
    	var tempY = 0;

    	if(IE)
    	{ //para IE
    		tempX = event.clientX + document.body.scrollLeft;
    		tempY = event.clientY + document.body.scrollTop;
    	}else{ //para netscape
    		tempX = event.pageX;
    		tempY = event.pageY;
    	}
    	if (tempX < 0){tempX = 0;}
    	if (tempY < 0){tempY = 0;}

    	//modificamos el valor del id "posicion" para indicar la posicion del mouse


    	document.getElementById('flotante').style.top = (tempY+margin);
    	document.getElementById('flotante').style.left = (tempX+margin);
    	document.getElementById('flotante').style.display='block';
    	return;
    }
    -->
    </script>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>






<script type="text/javascript">
$(function () {
  $('.data-delete').on('click', function (e) {
    if (!confirm('Estas seguro de querer Eliminar el registro con id?')) return;
    e.preventDefault();
    if (!confirm('Estas seguro de querer Eliminar el registro?')) return;
    $('#form-delete-' + $(this).data('form')).submit();

  });
});
</script>

</head>
