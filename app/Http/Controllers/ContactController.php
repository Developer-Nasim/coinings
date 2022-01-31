<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class ContactController extends Controller
{
    public function ContactRequest(Request $req){
        $insert = DB::table('contacts')->insert([ 
            "name"          => htmlspecialchars($req->name),
            "email"         => htmlspecialchars($req->email),
            "message"       => htmlspecialchars($req->message),
            "created_at"    => Carbon::now(),
        ]);
        if ($insert) {
            return back()->with('msg', "success");
        }else{
            return back()->with('msg', "sorry");
        }
    }
}
