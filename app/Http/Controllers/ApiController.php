<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\PlayerInfo;
use OpenApi\Annotations as OA;

class ApiController extends Controller
{     
    /**
     * @OA\Get(
     *     path="/api/player/{id}",
     *     summary="Get a specific player",
     *     description="Returns a single player",
     *     operationId="getPlayer",
     *     tags={"PlayerInfo"},
     *     @OA\Parameter(
     *         description="ID of player to return",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PlayerInfo")
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Player not found"
     *     )
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
