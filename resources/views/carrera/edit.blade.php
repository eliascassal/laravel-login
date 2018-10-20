@extends('layouts.create')

@section('title', 'Editar Carrera')
@section('title1', 'Editar	 Carrera')
@section('content')

<form class="form-control" method="POST" action="/carrera/{{$carrera->id}}">
		@method('PUT')
		@csrf

	<div class="form-group">
		<label for="">Nombre de la Carrera</label>
		<input type="text" name="name" value="{{$carrera->name}}" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Actualizar</button>
	
</form>
@endsection