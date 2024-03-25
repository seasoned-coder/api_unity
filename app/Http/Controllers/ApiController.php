<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\PlayerInfo;

class ApiController extends Controller
{
    public function getPlayer($id)
    {
        Log::info("Ehllo");
        $player = PlayerInfo::find($id);
        return response()->json($player);
    }

    // Route::get('/player', [ApiController::class, 'getPlayer']);
    // Route::put('/player', [ApiController::class, 'createPlayer']);
    // Route::post('/player/{id}', [ApiController::class, 'updatePlayer']);
    // Route::delete('/player/{id}', [ApiController::class, 'deletePlayer']);
    
    // Route::get('/skins', [ApiController::class, 'getSkins']);
    
    // Route::get('/leaderboard', [ApiController::class, 'getLeaderboard']);

}
