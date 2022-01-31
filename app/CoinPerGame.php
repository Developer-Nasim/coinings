<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinPerGame extends Model
{
    protected $fillable = ['game_name','total_coin'];
}
