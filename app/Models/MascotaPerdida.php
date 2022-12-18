<?php

namespace App\Models;

use App\Models\Especie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MascotaPerdida extends Model
{
    use HasFactory;
    protected $table = 'mascotas_perdidas';
    public $timestamps = false;

    protected $fillables = [
        'nombre_mascota',
        'descripcion',
        'raza',
        'color',
        'estado',
        'tamanio',
        'imagen_mascota',
        'especie',
        'id_user',
    ];

    /**
     * Relacion de llave foranea con el modelo Raza
     *
     */
    public function Raza()
    {
        return $this->belongsTo(Raza::class, 'raza', 'raza');
    }

    /**
     * Relacion de llave foranea con el modelo Color
     *
     */
    public function Color()
    {
        return $this->belongsTo(Color::class, 'color', 'color');
    }

    /**
     * Relacion de llave foranea con el modelo Estado
     *
     */
    public function Especie()
    {
        return $this->belongsTo(Especie::class, 'especie', 'especie');
    }

    /**
     * Relacion de llave foranea con el modelo Estado
     *
     */
    public function Estado()
    {
        return $this->belongsTo(Estado::class, 'estado', 'estado');
    }
}
