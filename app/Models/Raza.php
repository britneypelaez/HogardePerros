<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Raza extends Model
{
    use HasFactory;

    /**
     * Tabla a la que referencia el modelo
     *
     * @var string
     */
    protected $table = 'raza';

    /**
     * Llave primaria del moodelo
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillables = ['descripcion'];

}
