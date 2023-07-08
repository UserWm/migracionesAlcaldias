<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombre', 'id_rol', 'usuario', 'contrasena', 'id_alcaldia', 'dui'];

    protected $table = 'usuarios';

    public $timestamps = true;

    public function rol()
    {
        return $this->belongsTo(Role::class, 'id_rol');
    }

    public function alcaldia()
    {
        return $this->belongsTo(Alcaldia::class, 'id_alcaldia');
    }
    // use HasFactory;
}
