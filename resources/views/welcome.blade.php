@extends('layouts.app')

@section('title', 'Inicio')
@section('content')
    <div align="center">
        <h1>Repositorio de Objetos Virtuales de Aprendizaje Accesible</h1>  <!-- Titulo-->
    </div>
    <br>
    <h2>¡Bienvenido!</h2>  <!-- Subtitulo-->
    <!-- Texto-->
    <p>En este repositorio podr&aacute;s encontrar las diferentes herramientas para la manipulación de los Objetos Virtuales de Aprendizaje, teniendo en cuenta la accesibilidad web.</p>
    <p>Cada uno de los usuarios que utilice este repositorio podr&aacute; realizar la comunicación con los demás usuarios y contar con la ayuda de los administradores. </p>
    <p>&nbsp;</p>
    <h2>Video de registro</h2>
	<div class="table-responsive">
        <video controls>
            <source src="{{asset('videos/subtitles/help_7VideoRegistroConfirmacion.mp4')}}">
        </video>
    </div>
<br><br>
<h3>Descripción</h3>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 1:
Seleccionar el botón registrarse.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 2:
Ingresar datos en los campos.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 3:
Seleccionar el botón registrar.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 4: Seleccionar el botón aceptar.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 5:
Copiar contraseña enviada al correo.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 6:
Seleccionar el botón ingresar.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 7:
Ingresar correo y contraseña copiada.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 8:
Seleccionar perfíl.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 9:
Seleccionar modificar contraseña.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 10:
Ingresar contraseña actual.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 11:
Ingresar contraseña nueva.

<br><br>
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
Paso 12:
Seleccionar botón guardar.
<br><br>

@endsection