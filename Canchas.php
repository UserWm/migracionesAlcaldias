<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canchas extends Model
{
    protected $fillable = ['direccion', 'nombre', 'tipo_uso'];

    protected $table = 'canchas';

    public $timestamps = true;
    // use HasFactory;
}
