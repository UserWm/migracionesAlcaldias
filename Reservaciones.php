<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    protected $fillable = [
        'responsable',
        'dui',
        'direccion',
        'telefono',
        'cantidad_personas',
        'id_cancha',
        'fecha_hora_uso',
        'observaciones',
        'id_usuario',
        'fecha_registro'
    ];

    protected $table = 'reservacion';

    public $timestamps = true;

    public function cancha()
    {
        return $this->belongsTo(Cancha::class, 'id_cancha');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    // use HasFactory;
}
