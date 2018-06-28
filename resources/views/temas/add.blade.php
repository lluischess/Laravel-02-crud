@extends('layouts.master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Crear Temas</h2>
@stop
@section('content')
	{!! Form::open(array('url'=>'/llibres/temas'))!!}
	<h3>Formulari</h3>
	<div class="form-group">
		{!! Form::label('lbltitol','Nom')!!}
		<div class="form-controls">
			{!! Form::text('nom',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop