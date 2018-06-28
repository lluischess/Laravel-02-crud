@extends('layouts.master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>{{$llibre->titol}}</h2>
@stop
@section('content')
	{!! Form::open(array('url'=>'/llibres/'.$llibre->id, 'method' => 'PUT'))!!}
	<h3>Formulario</h3>
	<div class="form-group">
		{!! Form::label('lbltitol','Titol')!!}
		<div class="form-controls">
			{!! Form::text('titol',$llibre->titol, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('publicacio','Data de Publicació')!!}
		<div class="form-controls">
			{!! Form::date('publicacio',$llibre->publicacio, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('id','Data de Tematica')!!}
		<div class="form-controls">
			{!! Form::select('tematica',$temas,$llibre->tematica, ['class' => 'form-control'])!!}
		</div>
	</div>
	{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop