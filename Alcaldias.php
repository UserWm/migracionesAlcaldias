<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcaldias extends Model
{
    protected $fillable = ['cod_distrito', 'municipio'];

    protected $table = 'alcaldias';

    public $timestamps = true;
    // use HasFactory;
}
