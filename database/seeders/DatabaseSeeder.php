<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //$this->call(FlowersTableSeeder::class);
        //$this->call(PlayersTableSeeder::class);
        //$this->call(MapsTableSeeder::class);
        $this->call(PresentsTableSeeder::class);
    }
}
