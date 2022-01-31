@extends('layouts.game') 
@section('game_demo') https://www.youtube.com/watch?v=lX3vT_Gm_HE @endsection
@section('game')
  
<div class="i_got_coin">
  <button type="button" class="close_point_alert">X</button>
  <h1 class="coin_show"></h1>
</div>  


<style>
  #game .end{
    display: none;
  }
</style>

  <div class="the_game eyes_check"> 
    <div id="container" style="opacity:0;"> 
      <div class="row">
        <div class="col-lg-12"> 
            <div id="game" class="fs">
           
              <div class="end"> 
                <div id="replayBtn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 240 240">
                      <rect width="240" height="240" fill="none"/>
                      <path fill="#fff" d="M120,50V10L70,60l50,50V70c33.11,0,60,26.9,60,60c0,33.11-26.89,60-60,60c-33.1,0-60-26.89-60-60H40 c0,44.2,35.8,80,80,80s80-35.8,80-80S164.2,50,120,50z"/>
                  </svg>
                </div>
              </div>
              
              <div id="hintBtn">Hint</div>
              <div class="foundTxt"></div>
              <div class="timeTxt">20:00</div>
              <div class="timePlus">+3 sec</div>
              <div id="btnArea">
                <div id="b1" class="btn"></div>
              </div>
          
            </div> 
        </div>
      </div>
    </div>
  </div>
       
    {{-- Ad Popup --}}
    <div class="ad_popup">
      <iframe src="https://www.w3schools.com/" frameborder="0"></iframe>
      <div id="result"></div>
    </div>
    {{-- Ad Popup --}}
    
@endsection