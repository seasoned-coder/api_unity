<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerInfo extends Model
{
    use HasFactory;

    protected $table = "PlayerInfo";

    protected $fillable = ['id', 'punPlayerId', 'name', 'goldCoins', 'firstLoggedIn', 'lastLoggedIn'];

    protected $primaryKey = 'id';
}
