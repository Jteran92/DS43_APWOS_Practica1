<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;





class BiblioJuegosController extends Controller
{
    public function index(){
        $biblioJuegos = Juego::all();
        return view('biblioJuegos.index', compact('biblioJuegos'));
    }
    public function view($id){

        $biblioJuegos = Juego::findOrFail($id);
        return view('biblioJuegos.view', compact('biblioJuegos'));
    }
    public function update(){
        return view('biblioJuegos.update');
    }
    public function delete(){
        return view('biblioJuegos.delete');
    }
    public function create(){

        $biblioJuegos = Juego::all();
       


        return view('biblioJuegos.create', compact('biblioJuegos'));
    }
    public function terminate(){
        return view('biblioJuegos.terminate');
    }
    public function store(Request $request){
        //dd($request);
        $validated = $request ->validate(['nombre' => 'required',
        'nombre'=> 'required',
        'categoria'=>'required',
        'generos'=> 'required',
        'plataforma'=> 'required',
        
    
        ],[
            'nombre.required'=>'Se Requiere este campo obligatoriamente',
        ]);

        $biblioJuegos = Juego::create([
            'nombre'=> $validated['nombre'],
            'categoria'=> $validated['categoria'],
            'generos'=> $validated['generos'],
            'plataforma'=> $validated['plataforma']
           
            
            
          
            
    
        ]);
        
        if($biblioJuegos) {
            return redirect(route('biblioJuegos.index'));
        }
        return redirect(route('biblioJuegos.create'));
    }
  
}
