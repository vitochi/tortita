<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insumo_id')->unsigned();
            $table->foreign('insumo_id')->references('id')->on('insumos');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->integer('cant_insumo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumo_compra');
    }
}
