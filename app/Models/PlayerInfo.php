<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema
 */
class PlayerInfo extends Model
{
    use HasFactory;

    protected $table = "PlayerInfo";

    protected $fillable = ['id', 'punPlayerId', 'name', 'goldCoins', 'firstLoggedIn', 'lastLoggedIn'];

    protected $primaryKey = 'id';

    /**
     * @OA\Property(format="int32")
     *
     * @var int
     */
    public $id;
    
    /**
     * @OA\Property(description="The PUN player ID.")
     *
     * @var string
     */    
    public string $punPlayerId;

    /**
     * @OA\Property(format="int32", description="How many gold coins the player has.")
     *
     * @var int
     */    
    public $goldCoins;


    /**
     * @OA\Property()
     *
     * @var string
     */
    public $name;    

    /**
     * @OA\Property(format="date-time")
     *
     * @var string
     */
    public $firstLoggedIn;

    /**
     * @OA\Property(format="date-time")
     *
     * @var string
     */    
    public $lastLoggedIn;
}
