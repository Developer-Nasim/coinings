<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 


Route::get('/', function () { 
    return view('frontend.home');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});
Route::get('/games', function () {
    return view('frontend.games');
});
Route::get('/games/lucky-box', function () {
    return view('frontend.games.lucky_box');
})->middleware('auth');
Route::get('/games/tic-tac', function () {
    return view('frontend.games.tic_tac');
})->middleware('auth');
Route::get('/games/eyes-check', function () {
    return view('frontend.games.eyes_check');
})->middleware('auth');
Route::get('/games/spinner', function () {
    return view('frontend.games.spinner');
})->middleware('auth'); 
Route::get('/support', function () {
    return view('frontend.games.matching');
})->middleware('auth');
Route::get('/profile', function () {
    return view('frontend.profile');
})->middleware('auth'); 
Route::get('/faq', function () {
    return view('frontend.faq');
});
Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});
Route::get('/terms_of_service', function () {
    return view('frontend.terms_of_service');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::post('/submit/contact',"ContactController@ContactRequest")->name('contact_request');
Route::get('/delete/my/account',"HomeController@deleteAccount");



Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/send/earned/coines', 'EarnedCoinsController@GotCoin')->name('home');
