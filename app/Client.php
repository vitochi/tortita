<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'direccion', 'barrio'];
}
