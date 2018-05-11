<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Este comando "desabilita" a proteção do método fill($data = []); nos models
           Model::unguard();
    
         $this->call(UserTableSeeder::class);
         $this->call(AnunciosTableSeeder::class);

            Model::reguard();
    }
}
