﻿@extends('cuenta.accountview')

@section('title', 'Tu cuenta')

@section('content')
	<div class="form-signin">
		<!-- Formulario para realizar la modificaion de la cuenta de usuario-->
		{!! Form::model($user, ['route' => ['cuenta.user.update', 'section' => 'modificate'],'method' => 'PUT', 'files' => true]) !!}
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
			        <div class="panel panel-default">
			            <div class="panel-heading">Tu perfil</div>
			            <div class="panel-body">
			                <div class="media">
					          	<div class="media-center">
					          		<a href=""><img class="imag-responsive" src="{{asset('images/users/'.$user->photo.'')}}" width="230" height="230" name="photo" alt="avatar"/></a>
									{!! Form::label('photo','Cambiar foto')!!}
					          		{!! Form::file('photo')!!}   <!-- Seleccionador de archivo para la foto de usuario-->
					          	</div>
					        </div>
			            </div>
			        </div>
			    </div>
			    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			        <div class="panel panel-default">
			            <div class="panel-heading">Tus datos</div>
			            <div class="panel-body">
			            	@include('admin.template.partials.errors')
							@include('cuenta.fieldsaccount')  <!-- Campos de cuenta de usuario-->
				            <center>
				            	<input class="btn btn-warning" type="submit" value="Guardar" name="Guardar" style="width: 120px;" />
				            	<a href="{{ route('cuenta.user.index') }}" class="btn btn btn-warning" title="Cancelar modificación" name="Cancelar">Cancelar</a>
				            </center>
			            </div>
			        </div>
			    </div>
		{!! Form::close() !!}
	</div>

@endsection