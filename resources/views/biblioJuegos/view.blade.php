@extends('layouts.main')
@section('title','BiblioJuegos - Detalles')
@section('content')
    <h1>Juego</h1>
    
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-6">
            <img src="{{$Juego->image}}" class="img-fluid">
        </div>
        <div class="col-md-4">
            <h3>{{ $Juego->name}} </h3>
            <h5>{{ $Juego->type->name}} </h5>
        </div>
    </div>


@endsection