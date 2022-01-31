<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function deleteAccount(Request $req){
        $message = "";
        if (Auth::user()) {
            $delete_user = DB::table('users')->where('id',Auth::user()->id)->delete();
            if ($delete_user) {
                DB::table('earned_coins')->where('user_id',Auth::user()->id)->delete();
                $message = "success";
            }else{
                $message = "failed";
            }
        }
        return back()->with('status',$message);
    }




}
