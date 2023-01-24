<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $table = 'certificados';

    /**
     * Llave primaria del moodelo
     *
     * @var string
     */
    protected $primaryKey = 'certificados';

    protected $fillables = [
        'id_fundacion',
        'nombre',
        'identificacion',
        'fecha',
        'monto',
        'documento'
    ];
}
