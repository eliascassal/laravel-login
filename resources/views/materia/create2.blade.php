@extends('layouts.create')

@section('title', 'Nueva Materia')
@section('title1', 'Nueva Materia')
@section('content')

<form class="form-control" method="POST" action="/materia">
		@csrf

	<div class="form-group">
		<label for="">Nombre de la materia</label>
		<input type="text" name="name" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	
</form

	<MateriaComponent></MateriaComponent>


@endsection