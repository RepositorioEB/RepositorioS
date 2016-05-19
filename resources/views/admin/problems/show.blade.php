@extends('layouts.app')

@section('title', 'Solucion del problema')

@section('content')
	
	<section>
		<div>
			<header><center><h2><b>{{ 'Solucion para el problema: '.$problem->name }}</b></h2></header></center>
			<article>
				<div class="form-group">
					<h3>{!! Form::label('description','Descripcion de la solucion:',["class"=>"label label-primary"]) !!}</h3>
					{!! Form::textarea('description', $replace=str_replace("\r","<br>",$problem->solution), ['class' => 'form-control','placeholder' => 'Descripción del OVA (Minimo 20 caracteres)']) !!}
				</div>
			</article>
		</div>
	</section>
	<section>
		<center>
			<a href="{{route('admin.problems.index')}}" title="Problemas propios" class="btn btn-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"> Listado de problemas</span></a>
		</center>
	</section>
@endsection