<?php

namespace App\Models;

use App\Models\Raza;
use App\Models\Color;
use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    public $timestamps = false;

    /**
     * Llave primaria del moodelo
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillables = [
        'id_fundacion',
        'nombre_mascota',
        'descripcion',
        'raza',
        'color',
        'estado',
        'tamanio',
        'tipo',
        'edad',
        'imagen_mascota'
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
    public function Estado()
    {
        return $this->belongsTo(Estado::class, 'estado', 'estado');
    }
}
