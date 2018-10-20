@extends('layouts.create')

@section('title', 'Lista de aulas')
@section('title1', 'Lista de aulas')
@section('content')
	<div class="row">
		@foreach($aulas as $aula)
			<div class="col-sm">
				<div class="card text-center" Style= "width: 18rem; margin-top:50px;">
						<img Style= "width: 100px; height: 100px; background-color:#EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/qm9897332054.jpg" alt="">
					<div class="card-body text-center">
						<h5 class="card-title">{{$aula->name}}</h5>
						<p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardCode y que nos muestre como esta quedando la listilla aguante informatica </p>
						<a href="/aula/{{$aula->id}}" class="btn btn-primary">Ver mas...</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection