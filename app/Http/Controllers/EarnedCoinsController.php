<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;

class EarnedCoinsController extends Controller{

    public function GotCoin(Request $req){ 
        $msg = "";
        if (Auth::user()) {
            if ($req->game_name !== "spinner" && $req->game_name !== "lucky-box") { 
                $checkForCoin = DB::table('coin_per_games')->where('game_name', $req->game_name)->get()->first();
                if ($checkForCoin) {
                    $insert = DB::table('earned_coins')->insert([
                        "user_id"   =>Auth::user()->id,
                        "game_name" =>$req->game_name,
                        "coins"     =>$checkForCoin->total_coin,
                        "created_at"=> Carbon::now(),
                    ]);
                    if ($insert) {
                        $msg = $checkForCoin->total_coin;
                    }else{
                        $msg = "sorry";
                    }
                }
            }else{
                $insert = DB::table('earned_coins')->insert([
                    "user_id"   =>Auth::user()->id,
                    "game_name" =>$req->game_name,
                    "coins"     =>$req->you_got,
                    "created_at"=> Carbon::now(),
                ]);
                if ($insert) {
                    $msg = $req->you_got;
                }else{
                    $msg = "sorry";
                }
            }

        }
        return response()->json($msg,200);
    }






    
}
