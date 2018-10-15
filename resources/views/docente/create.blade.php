@extends('layouts.create')

@section('title', 'Nuevo docente')

@section('content')

<form class='form-control' method='POST' action="/docente">
		@csrf

	<div class="form-group">
		<label for="">Nombre y apellido</label>
		<input type="text" name='name' class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	
</form>
@endsection