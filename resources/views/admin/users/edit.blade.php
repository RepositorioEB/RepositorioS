@extends('layouts.app')

@section('title', 'Editar usuario '.$users->name)

@section('content')

	@include('admin.template.partials.errors')
	
	{!! Form::model($users, ['route' => ['admin.users.update',$users->id],'method' => 'PUT']) !!}   <!-- Formulario para modificar usuario-->
		<br>
		<h3>Ingrese los datos que desea modificar:</h3> 
		<br>
		@if(\Auth::user()->id == $users->id)    <!--Condicion de usuario actual -->
			@include('admin.template.partials.fieldsuser', ['routes' => 'edit', 'variable' => 'no'])
		@else
			@include('admin.template.partials.fieldsuser', ['routes' => 'edit', 'variable' => 'si'])
		@endif
		<div class="form-group" align="center">
			{!! Form::submit('Editar',['class' => 'btn btn-warning']) !!}   <!-- Boton para modificar el usuario-->
			<a href="{{ route('admin.users.index') }}" class="btn btn btn-warning" title="Cancelar modificación" name="Cancelar">Cancelar</a>
		</div>
	{!! Form::close() !!}
	
@endsection