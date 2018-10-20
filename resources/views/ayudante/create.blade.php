@extends('layouts.create')

@section('title', 'Nuevo de Ayudante')

@section('content')

<form class='form-control' method='POST' action="/ayudante">
	@csrf
	<div class="form-group">
		<label for="">Nombre y apellidos del ayudante</label>
		<input type="text" name='name' class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar Nuevo</button>
	
</form>
@endsection