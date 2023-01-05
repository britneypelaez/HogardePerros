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

    public function scopeJoinRazaColor($query)
    {
        return $query->select('mascotas_perdidas.*', 'raza.descripcion AS rasa', 'color.descripcion AS colorin')->join('raza', 'mascotas_perdidas.raza', '=', 'raza.raza')->join('color', 'mascotas_perdidas.color', '=', 'color.color');
    }

    public function scopeEspecie($query, $especie){
        if($especie)
        return $query->where('mascotas_perdidas.especie', 'like', "%$especie%");
    }

    public function scopeColor($query, $color){
        if($color)
        return $query->where('mascotas_perdidas.color', 'like', "%$color%");
    }

    public function scopeTamaño($query, $tamaño){
        if($tamaño)
        return $query->where('mascotas_perdidas.tamanio', 'like', "%$tamaño%");
    }

    public function scopeRaza($query, $raza){
        if($raza)
        return $query->where('mascotas_perdidas.raza', 'like', "%$raza%");
    }
}
