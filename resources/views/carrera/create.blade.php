@extends('layouts.create')

@section('title', 'Nueva Carrera')
@section('title1', 'Nueva Carrera')
@section('content')

<form class="form-control" method="POST" action="/carrera">
		@csrf

	<div class="form-group">
		<label for="">Nombre de la Carrera</label>
		<input type="text" name="name" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar CArrera 	 	</button>
	
</form>
@endsection