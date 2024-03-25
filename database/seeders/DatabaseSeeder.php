<?php

use Illuminate\Database\Seeder;
use Database\Seeders\PlayerInfoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlayerInfoSeeder::class);
    }
}