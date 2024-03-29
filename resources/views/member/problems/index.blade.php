﻿@extends('layouts.app')

@section('title', 'Lista de problemas')

@section('content')

	@include('admin.template.partials.errors')
	<div class="table-responsive">
		<a href="{{ route('member.problems.create') }}" class="btn btn-info">Registrar nuevo problema</a>       <!-- Enlace para registrar un nuevo problema-->
		{!! Form::open(['route' => 'member.problems.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}     <!-- Formulario para traer los problemas registrados-->
			<label for="name">Buscar problema: </label>
			<div class="input-group">
				{!! Form::text('name', null, ['id'=>'name','title'=>'Ingresar problema','class' => 'form-control', 'placeholder' => 'Buscar problema', 'aria-describedby' => 'search']) !!}   <!-- Campo para ingresar el problema que desea buscar-->
				<span class="input-group-addon" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</span>
			</div>
		{!! Form::close() !!}
		<?php
			$i=0;
		?>
		@foreach($problems as $problem)    <!-- Ciclo de problemas-->
			@if($problem->user_id == Auth::user()->id)    <!-- Condicion para comparar el id del usuario-->
				<?php
					$i=1;
				?>	
			@endif
		@endforeach
		@if($i==1)
		<br><br>
		<h3>Los problemas propios que se encontraron fueron los siguientes:</h3> 
		<br>
		<table class="table table-striped">
			<thead>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Estado</th>
				<th>Solucion</th>
			</thead>
			<tbody>
				@foreach($problems as $problem)    <!-- Ciclo de problemas-->
					@if($problem->user_id == Auth::user()->id)    <!-- Condicion para comparar el id del usuario-->
						<tr>
						<td>{{ $problem->name }}</td>
						<td>{{ $problem->description }}</td>
						@if($problem->state == 0)   <!-- Condicion para verificar el estado del problema-->
							<td><h4><span class="label label-primary">Sin resolver</span></h4></td>
						@else
							<td><h4><span class="label label-danger">Resuelto</span></h4></td>
						@endif
						@if($problem->solution == '' OR $problem->state == 0)
							<td><a href="#" class="btn btn-info disabled" title="Consultar"><span class="glyphicon glyphicon-folder-open" aria-hidden="true">Visualizar</span></a></td>
						@else
							<td><a href="{{ route('member.problems.show', $problem->id) }}" class="btn btn-info" title="Consultar"><span class="glyphicon glyphicon-folder-open" aria-hidden="true">Visualizar</span></a></td>
						@endif
						</tr>
					@endif
				@endforeach
			</tbody>	
		</table>
		<div class="text-center">
		@if(isset($_GET['name']))
			{!! $problems->appends(array('name' => $_GET['name']))->links()!!}   <!-- Paginacion ovas-->
		@else
			{!! $problems->render() !!}               <!-- Paginacion de ayuda-->
		@endif
		</div>
		@else
			<br><br>
			<h3><legend>&nbsp;&nbsp;&nbsp;No se encontró ningún elemento.</legend></h3>
		@endif
	</div>
@endsection