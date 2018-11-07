@extends('layouts.create')

@section('title', 'Nuevo docente')
@section('title1', 'Nuevo docente')
@section('content')


@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

	<form class="form-control" method="POST" action="/docente" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Nombre y apellido</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for=""> Foto del docente</label>
			<input type="file" accept = "jpg, png, gif, jpeg" name="avatar">
		</div>
		<div class="form-group">
			<label for=""> descripcion del docente</label>
			<textarea name="description" id="description" cols="30" rows="10"> descripcion del docente</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		
	</form>
@endsection