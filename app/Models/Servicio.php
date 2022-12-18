<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    public $timestamps = false;

    protected $fillables = [
        'nombre_serviciio',
        'descripcion',
        'imagen_mascota',
        'id_fundacion',
    ];
}
