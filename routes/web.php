<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiblioJuegosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/bibliojuegos')->group(function(){
    Route::get('/',[BiblioJuegosController::class, 'index'])->name('biblioJuegos.index');
    Route::get('/view/{id}',[BiblioJuegosController::class, 'view'])->name('biblioJuegos.view');
    Route::get('/update/{id}',[BiblioJuegosController::class, 'update'])->name('biblioJuegos.update');
    Route::get('/delete/{id}',[BiblioJuegosController::class, 'delete'])->name('biblioJuegos.delete');
    Route::get('/terminate/{id}',[BiblioJuegosController::class, 'terminate'])->name('biblioJuegos.terminate');
    Route::get('/create/',[BiblioJuegosController::class, 'create'])->name('biblioJuegos.create');
    Route::post('/create/',[BiblioJuegosController::class, 'store'])->name('biblioJuegos.store');
    
});
    
