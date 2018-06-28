@extends('layouts.master')
@section('titlePage')
Llibres
@stop
@section('header')
<h2>Registro de libros</h2>
<h2>{{$llibre->titol}}</h2>
<h4>{{$llibre->id}}</h4>
@stop
@section('content')

	<h3>Info libros</h3>
	<p>Fecha: {{$llibre->publicacio}}</p>
	<p>Temàtica: {{$llibre->tematica}}</p>


	<div>
		<a href="{{ url('llibres/'.$llibre->id.'/delete') }}"><button class="btn btn-danger">Eliminar</button></a>
		<a href="{{ url('llibres/'.$llibre->id.'/edit') }}"><button class="btn btn-primary">Editar</button></a>
	</div>
	


@stop