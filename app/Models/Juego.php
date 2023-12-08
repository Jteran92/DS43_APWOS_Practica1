<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;


class Juego extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_juego',
        'categoria',
        'generos',
        'plataforma'
      

    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function evolutions() {
        return $this->belongsTo(evolutions::class);
    }
}

