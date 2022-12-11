<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campania extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'campanias';
    public $timestamps = false;
}
