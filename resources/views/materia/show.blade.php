@extends('layouts.create')

@section('title', 'Descripcion de Materias')

@section('title1', 'Materia')
@section('content')

<img Style= "width: 200px; height: 200px; background-color:#EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/qm9897332054.jpg" alt="">
<div class="text-center">
	<h5 class="card-title">{{$materia->name}}</h5>
	<p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica </p>
	<a href="/materia/{{$materia->id}}/edit" class="btn btn-primary">Editar</a>
</div>
@endsection