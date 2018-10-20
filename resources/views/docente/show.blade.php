@extends('layouts.create')

@section('title', 'Nuevo docente')
@section('title1', 'Docente')
@section('content')

<img Style= "width: 200px; height: 200px; background-color:#EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$docente->avatar}}" alt="">
<div class="text-center">
	<h5 class="card-title">{{$docente->name}}</h5>
	<p class="card-text"> una descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica na descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica </p>
</div>
@endsection