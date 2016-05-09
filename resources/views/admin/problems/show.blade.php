@extends('layouts.app')

@section('title', 'Solucion del problema')

@section('content')
	
	<section>
		<div>
			<header><center><h1><b>{{ 'Solucion para el problema: '.$problem->name }}</b></h1></header></center>
			<article>
				<p><b>Descripcion de la solucion:</b></p>
				<p>{!! $replace=str_replace("\r","<br>",$problem->solution); !!}</p>  <!-- Descripcion de la ayuda-->
			</article>
		</div>
	</section>
	<section>
		<center>
			<a href="{{route('admin.problems.index')}}" title="Problemas propios" class="btn btn-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"> Listado de problemas</span></a>
		</center>
	</section>
@endsection