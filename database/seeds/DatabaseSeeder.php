<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          DB::statement('SET FOREIGN_KEY_CHECKS=0;');

           $this->call(ClientTableSeeder::class);
           $this->call(InsumoTableSeeder::class);
           $this->call(CompraTableSeeder::class);

          DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
