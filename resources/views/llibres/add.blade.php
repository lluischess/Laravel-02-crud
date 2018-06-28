@extends('layouts.master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Crea un registro de libro</h2>
@stop
@section('content')
	{!! Form::open(array('url'=>'/llibres'))!!}
	<h3>Formulario</h3>
	<div class="form-group">
		{!! Form::label('lbltitol','Titol')!!}
		<div class="form-controls">
			{!! Form::text('titol',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('publicacio','Data de Publicació')!!}
		<div class="form-controls">
			{!! Form::date('publicacio',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('id','Data de Tematica')!!}
		<div class="form-controls">
			{!! Form::select('tematica',$temas,null, ['class' => 'form-control'])!!}
		</div>
	</div>
	{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop