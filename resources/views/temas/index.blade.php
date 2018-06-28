@extends('layouts.master')
@section('titlePage')
Temes
@stop
@section('header')
<h2>Lista de temas</h2>
@stop
@section('content')

<h3>Benvinguts al portal de gestió de temes</h3>

@foreach ($temas as $tema)
	<div class="tema">
		<a href="{{ url('llibres/temas/'.$tema->id) }}">
			<strong>{{ $tema->nom }}</strong>
		</a>
	</div>
@endforeach

@stop