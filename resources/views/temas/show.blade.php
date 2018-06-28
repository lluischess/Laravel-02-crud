@extends('layouts.master')
@section('titlePage')
Tema
@stop
@section('header')
<h2>Registre de Temas</h2>
<h2>{{$tema->nom}}</h2>
@stop
@section('content')

	<h3>Informació del tema</h3>
	<p>Temàtica: {{$tema->nom}}</p>

	<div>
		<a href="{{ url('llibres/temas/'.$tema->id.'/delete') }}"><button class="btn btn-danger">Elimina</button></a>
		<a href="{{ url('llibres/temas/'.$tema->id.'/edit') }}"><button class="btn btn-primary">Edita</button></a>
	</div>


@stop