@extends('layouts.game') 
@section('game_demo') https://www.youtube.com/watch?v=lX3vT_Gm_HE @endsection
@section('game')
 
 
<div class="i_got_coin">
  <button type="button" class="close_point_alert">X</button>
  <h1 class="coin_show"></h1>
</div>  

    <!-- the game is here -->
    <div class="the_game luckybox"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3"> 
              <div class="all_the_lucky_boxes">
                <button type="button" class="single_lucky_box">Click</button>
                <button type="button" class="single_lucky_box">Click</button>
                <button type="button" class="single_lucky_box">Click</button>
                <button type="button" class="single_lucky_box">Click</button>
                <button type="button" class="single_lucky_box">Click</button>
                <button type="button" class="single_lucky_box">Click</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- the game is here -->

    {{-- Ad Popup --}}
    <div class="ad_popup">
      <iframe src="https://www.youtube.com/" frameborder="0"></iframe>
      <div id="result"></div>
    </div>
    {{-- Ad Popup --}}
  
  
@endsection