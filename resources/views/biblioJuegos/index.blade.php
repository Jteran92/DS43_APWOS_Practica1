@extends('layouts.main')
@section('title','biblioJuegos')
@section('content')

    <div id="Centrado" class="row">
        <div class= "col-8">
            <h1>BiblioJuegos</h1>
        </div>
   
        <div class="col-4">
            <br>
            <br>
            <br>
            <a class="btn-azul" href="{{route('biblioJuegos.create')}}">Añadir</a>
        </div>
    </div>
    <h1>Lista de Juegos</h1>
    
    <table id="centrado" class="table table-bordered">
        <thead>
        'nombre',
        'id_juego',
        'categoria',
        'generos',
        'plataforma'
            <th>nombre</th>
            <th>id_juego</th>
            <th>categoria</th>
            <th>generos</th>
            <th>plataforma</th>
           
        </thead>
        <tbody>
            @foreach ($biblioJuegos as $j)
                <tr>
                    <td>{{$j->nombre}}</td>
                    <td>{{$j->id_juego}}</td>
                    <td>{{$j->categoria}}</td>
                    <td>{{$j->generos}}</td>
                    <td>{{$j->plataforma}}</td>
                    
                    <td>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection