<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['fecha', 'proveedor', 'total'];

    public function insumos(){
        return $this->belongsToMany('\App\Insumo','insumo_compra')
            ->withPivot('insumo_id', 'cant_insumo');
    }

}
