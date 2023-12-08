@extends('layouts.main')
@section('title','Juego - Crear')
@section('content')
    <h1>Agregar un Juego</h1>
    <div class="row">

        <div class="col-md-8">
            <img src="" class="img-fluid">
        </div>
        <div class="col-md-4">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            
        @endforeach
        <form method="POST" action="{{route('biblioJuegos.store')}}">
        @csrf
        <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"></input>
                @if($errors->has('nombre'))
                    <p class="text-warning">{{$errors->first('nombre') }}</p>
                @endif
              
                <label>categoria</label>
                <select name="categoria" class="form-control">
                    <option  >Seleccione la categoria</option>
                    <option value="Accion">Accion</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Deportivo">Deportivo</option>
                    <option value="Estrategia">Estrategia</option>
                    <option value="Otros">Otros</option>
                </select>
                @if($errors->has('categoria'))
                    <p class="text-warning">{{$errors->first('categoria') }}</p>
                @endif
                <label>generos</label>
                <select name="generos" class="form-control">
                    <option  >Seleccione el genero </option>
                    <option value="RPG">RPG</option>
                    <option value="MMORPG">MMORPG</option>
                    <option value="ROL">ROL</option>
                    <option value="MOBA">MOBA</option>
                    <option value="SURVIVAL">SURVIVAL</option>
                    <option value="SHOOTER">SHOOTER</option>
                    <option value="OTRO">OTRO</option>
                </select>
                @if($errors->has('generos'))
                    <p class="text-warning">{{$errors->first('generos') }}</p>
                @endif
                <label>plataforma</label>
                <select name="plataforma" class="form-control">
                    <option  >Seleccione la plataforma </option>
                    <option value="PC">PC</option>
                    <option value="XBOX">XBOX</option>
                    <option value="PS">PS</option>
                    <option value="STEAMBOX">STEAMBOX</option>
                    <option value="MULTIPLATAFORMA">Multiplataforma</option>
                    <option value="OTRO">OTRO</option>
                </select>
                @if($errors->has('plataforma'))
                    <p class="text-warning">{{$errors->first('plataforma') }}</p>
                @endif

            
    

                <button  class="btn btn-lg btn-success" type="submit">Guardar</button>
        </form>
        </div>
    </div>
@endsection