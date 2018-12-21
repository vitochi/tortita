<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['fecha', 'slug', 'proveedor', 'total']; 

     public $timestamps = false;

    protected $dates = ['fecha'];

    protected $dateFormat = 'Y-m-d';

    public function insumos(){
        return $this->belongsToMany('\App\Insumo','insumo_compra')
            ->withPivot('insumo_id', 'cant_insumo');
    }

    public function getFechaAttribute($date) {
        if (!empty($date))
            return Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
    }

    public function setFechaAttribute($date){

    	$this->attributes['fecha'] = Carbon::createFromFormat('Y-m-d', $date);
    }

}
