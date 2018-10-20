@extends('layouts.create')

@section('title', 'Nueva Aula')
@section('title1', 'Nueva Aula o laboratorio')
@section('content')

<form class="form-control" method="POST" action="/aula">
		@csrf

	<div class="form-group">
		<label for="">Nombre del Aula</label>
		<input type="text" name="name" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	
</form>
@endsection