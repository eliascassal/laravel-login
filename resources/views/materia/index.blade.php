@extends('layouts.create')

@section('title', 'Lista de Materias')
@section('title1', 'Lista de Materias')
@section('content')
	<div class="row">
		@foreach($materias as $materia)
			<div class="col-sm">
				<div class="card text-center" Style= "width: 18rem; margin-top:50px;">
						<img Style= "width: 100px; height: 100px; background-color:#EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/qm9897332054.jpg" alt="">
					<div class="card-body text-center">
						<h5 class="card-title">{{$materia->name}}</h5>
						<p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardCode y que nos muestre como esta quedando la listilla aguante informatica </p>
						<a href="/materia/{{$materia->id}}" class="btn btn-primary">Ver mas...</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection