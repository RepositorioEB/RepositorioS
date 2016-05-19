@extends('layouts.app')

@section('title', 'Lista de ayudas')

@section('content')
	<div class="table-responsive">
	{!! Form::open(['route' => 'helps.list', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}    <!-- Formulario para traer las ayudas registradas-->
			<label for="name">Buscar ayuda: </label>
			<div class="input-group">
				{!! Form::text('name', null, ['id'=>'name','title'=>'Ingresar ayuda','class' => 'form-control', 'placeholder' => 'Buscar ayuda', 'aria-describedby' => 'search']) !!}   <!-- Campo para ingresar la ayuda a buscar-->
				<span class="input-group-addon" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</span>
			</div>
	{!! Form::close() !!}
	<br><br><br>
		@if(count($helps)>0)
		<h3>Las ayudas que se encontraron fueron las siguientes:</h3> 
		<br>
		<table class="table table-striped">
			<thead>
				<th>Nº</th>               <!-- Nombre columna-->
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Creador</th>
				<th>Acción</th>
			</thead>
			<tbody>
				<?php
					$cont = 1;
					if(isset($_GET['page'])){
						$cont = $cont + ($helps->PerPage()*($_GET['page']-1));
					}
				?>
				
				@foreach($helps as $help)   <!-- Ciclo de ayudas-->
					<tr>
						<td>{!! $cont++; !!}</td>            <!-- Contador-->
						<td>{{ $help->name }}</td>
						<td>{!! $replace=str_replace("\r","<br>",$help->description); !!}</td>
						<td>{{ $help->user->name }}</td>
						<td>
							<a href="{{ route('helps.show', $help->id) }}" class="btn btn-info" title="Consultar"><span class="glyphicon glyphicon-folder-open" aria-hidden="true">Visualizar</span></a>   <!-- Enlace para seleccionar la ayuda que desea consultar--> 
						</td>
					</tr>		
				@endforeach
			</tbody>	
		</table>
	<div class="text-center">
		@if(isset($_GET['name']))
			{!! $helps->appends(array('name' => $_GET['name']))->links()!!}   <!-- Paginacion ovas-->
		@else
			{!! $helps->render() !!}               <!-- Paginacion de ayuda-->
		@endif
	</div>
	@else
		<br><br>
		<h3><legend>&nbsp;&nbsp;&nbsp;No se encontró ningún elemento.</legend></h3>
	@endif
	
	</div>
@endsection