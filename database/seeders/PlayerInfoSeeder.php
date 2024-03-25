<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlayerInfo;

class PlayerInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $playerInfo = PlayerInfo::create([
            "name"=> 'test player',
            "punPlayerId"=> 'abc123aaa',
            "goldCoins"=> 4]);
    }
}
