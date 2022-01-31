<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class earnedCoins extends Model
{
    protected $fillable = ["user_id","game_name","coins","status"];
}