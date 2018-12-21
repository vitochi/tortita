<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = ['nombre', 'slug', 'descripcion', 'medida', 'cantidad', 'price'];

    public $timestamps = false;

    public function compras(){
        return $this->belongsToMany('\App\Compra','insumo_compra')
            ->withPivot('compra_id', 'cant_insumo');
    }

}
