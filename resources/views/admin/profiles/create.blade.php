@extends('layouts.app')

@section('title', 'Registrar discapacidad')

@section('content')

	@include('admin.template.partials.errors') 
	{!! Form::open(['route' => 'admin.profiles.store','method' => 'POST']) !!}       <!-- Formulario para crear perfil-->
		<br>
		<h3>Ingrese los datos de la nueva discapacidad:</h3> 
		<br>
		@include('admin.template.partials.fieldsprofile')    <!-- Traer campos perfil-->
		<div class="form-group">
			<center>
			{!! Form::submit('Registrar',['class' => 'btn btn-warning']) !!}
			<a href="{{ route('admin.profiles.index') }}" class="btn btn btn-warning" title="Cancelar registro" name="Cancelar">Cancelar</a>   <!--Enlace cancelar registro -->
			</center>
		</div>
	{!! Form::close() !!}
	
@endsection