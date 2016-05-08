<!DOCTYPE html>
<html>
    <head>
        <title>La solicitud contiene sintaxis errónea y no debería repetirse.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Fonts -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

	    <!-- Styles -->
	    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
	    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

	    <!-- Inicio Modificado (ed) -->
	    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
	    <!-- Iconos -->
	    <!--<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">-->
	    <!-- Fin Modificado (ed) -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesDaltonismo.css') }}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
                color: #000000;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <center><div class="title"><span class="glyphicon glyphicon-fire"></span>Error 400. La solicitud contiene sintaxis errónea y no debería repetirse.<a href="{{ url('/') }}"><br><span class="glyphicon glyphicon-home"></span>Pagina principal</a></div></center>
            </div>
        </div>
    </body>
    <!-- Inicio Modificado (ed) -->
    <script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
</html>