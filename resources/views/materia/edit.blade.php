@extends('layouts.create')

@section('title', 'Editar Materia')
@section('title1', 'Editar Materia')
@section('content')

<form class="form-control" method="POST" action="/materia/{{$materia->id}}">
		@method('PUT')
		@csrf

	<div class="form-group">
		<label for="">Nombre de la Materia</label>
		<input type="text" name="name" value="{{$materia->name}}" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Actualizar</button>
	
</form>
@endsection