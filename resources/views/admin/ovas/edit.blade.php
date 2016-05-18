@extends('layouts.app') 

@section('title', 'Editar ova '.$ovas->name)

@section('content')
	
	@include('admin.template.partials.errors')
	{!! Form::open( ['route' => ['ovas.downloads.store','ova_id'=>$ovas->id],'method' => 'POST', 'files' => true]) !!}		
	<div class="form-group">
		<h3>{!! Form::label('archive','Archivo',["class"=>"label label-primary"]) !!}
			<br><br>
				<!-- Campo del nombre del ova-->
				{!! Form::text('archive', $ovas->archive, ['title'=>'Archivo','class' => 'form-control','readonly'=>'readonly']) !!}
		</h3>
	</div>
	{!! Form::submit('Descargar',['class' => 'btn btn-warning']) !!}      <!-- Boton para realizar la descarga del ova-->
	{!! Form::close() !!}
	
	{!! Form::model($ovas, ['route' => ['admin.ovas.update',$ovas->id],'method' => 'PUT', 'files' => true]) !!}   <!-- Formulario para modificar los ovas-->
		@include('admin.template.partials.fieldsova', ['routes' => 'edit'])   <!-- Traer campos ova-->
		<div class="form-group">
			<h3>{!! Form::label('state','Estado',['class'=>'label label-primary']) !!}</h3>
			{!! Form::select('state', [ false => 'Solicitud', true => 'Subido'], null, ['class' => 'form-control select-state','required']) !!}   <!-- Seleccionar el estado del ova-->
		</div>
		<div class="form-group">
			<center>
			{!! Form::submit('Editar',['class' => 'btn btn-warning']) !!}       <!-- Boton editar ova-->  
			<a href="{{ route('admin.ovas.index') }}" class="btn btn btn-warning" title="Cancelar modificación" name="Cancelar">Cancelar</a>  <!-- Enlace cancelar modificacio-->
			</center>
		</div>
	{!! Form::close() !!}
	
@endsection