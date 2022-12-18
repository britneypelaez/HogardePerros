<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioPrestado extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'servicios_prestados';
    public $timestamps = false;

    protected $fillables = [
        'nombre_servicio',
        'id_cliente',
        'descripcion',
        'id_fundacion',
    ];

    /**
     * Relacion de llave foranea con el modelo Users
     *
     */
    public function Users()
    {
        return $this->belongsTo(User::class, 'id_cliente', 'id');
    }
}
