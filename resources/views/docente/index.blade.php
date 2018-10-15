@extends('layouts.create')

@section('title', 'Lista de Docente')

@section('content')

<form class='form-control' method='POST' action="/docente">
		@csrf
	<div class="form-group">
		<label for="">Nombre y apellidos</label>
		<input type="text" name='name'  class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar Nuevo</button>
	
</form>
@endsection