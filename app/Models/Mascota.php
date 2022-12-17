<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    public $timestamps = false;

    protected $fillables = ['id_fundacion', 'nombre_mascota', 'descripcion', 'raza', 'color', 'estado', 'tamanio', 'tipo', 'edad', 'imagen_mascota'];
}
