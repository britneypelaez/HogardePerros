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

    public function scopeJoinRazaColor($query)
    {
        return $query->select('mascotas.*', 'raza.descripcion AS rasa', 'color.descripcion AS colorin')->join('raza', 'mascotas.raza', '=', 'raza.raza')->join('color', 'mascotas.color', '=', 'color.color')->where('mascotas.estado', '=', 1);
    }

    public function scopeEspecie($query, $especie){
        if($especie)
        return $query->where('mascotas.especie', 'like', "%$especie%");
    }

    public function scopeColor($query, $color){
        if($color)
        return $query->where('mascotas.color', 'like', "%$color%");
    }

    public function scopeTamaño($query, $tamaño){
        if($tamaño)
        return $query->where('mascotas.tamanio', 'like', "%$tamaño%");
    }

    public function scopeEdad($query, $edad){
        if($edad)
        return $query->where('mascotas.edad', 'like', "%$edad%");
    }

    public function scopeRaza($query, $raza){
        if($raza)
        return $query->where('mascotas.raza', 'like', "%$raza%");
    }
}
