@extends('layouts.create')

@section('title', 'Lista de Docentes')
@section('title1', 'Lista de Docentes')
@section('content')
	<div class="row">
		@foreach($docentes as $docente)
			<div class="col-sm">
				<div class="card text-center" Style= "width: 18rem; margin-top:50px;">
						<img Style= "width: 100px; height: 100px; background-color:#EFEFEF; margin: 20px;" class="card-img-top mx-auto d-block"  src="/images/{{$docente->avatar}}" alt="">
					<div class="card-body ">
						<h5 class="card-title">{{$docente->name}}</h5>
						<p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica </p>
						<a href="/docente/{{$docente->id}}" class="btn btn-primary">Ver mas...{{$docente->id}}</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection