<?php

use App\Insumo;
use Illuminate\Database\Seeder;

class InsumoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insumos')->truncate();
        factory('App\Insumo', 10)->create();
    }
}
