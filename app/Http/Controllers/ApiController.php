<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\PlayerInfo;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *   title="My API",
 *   version="1.0.0"
 * )     
 */
class ApiController extends Controller
{

    /**
     * @OA\Get(
     *     path="/player/{id}",
     *     summary="Get a specific player",
     *     tags={"PlayerInfo"},
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */        
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
