<?php

use App\Compra;
use Illuminate\Database\Seeder;

class CompraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->truncate();
        factory('App\Compra', 10)->create();
    }
}
