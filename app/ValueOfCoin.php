<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueOfCoin extends Model
{
    protected $fillable = ["total_coin",'value','currency'];
}
