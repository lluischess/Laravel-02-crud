@extends('layouts.master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>{{$tema->nom}}</h2>
@stop
@section('content')
	{!! Form::open(array('url'=>'/llibres/temas/'.$tema->id, 'method' => 'PUT'))!!}
	<h3>Formulari</h3>
	<div class="form-group">
		{!! Form::label('lbltitol','Nom')!!}
		<div class="form-controls">
			{!! Form::text('nom',$tema->nom, ['class' => 'form-control'])!!}
		</div>
	</div>
	{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop