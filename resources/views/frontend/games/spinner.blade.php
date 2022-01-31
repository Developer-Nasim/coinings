@extends('layouts.game') 
@section('game_demo') https://www.youtube.com/watch?v=lX3vT_Gm_HE @endsection
@section('game')
 
<div class="i_got_coin">
    <button type="button" class="close_point_alert">X</button>
    <h1 class="coin_show"></h1>
  </div>  
  
  
    <div id="main" class="the_game spinner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="spinnerGame"> 
                        <div id="left-column">
                            <form class="iform" action="#" method="get">  
                                <button class="spin-trigger cmn-btn">Spin</button>
                            </form>        
                            <canvas class="canvas" width="500" height="500"></canvas> 
                        </div>
                        <div id="right-column">
                            <p class="winner">The Winner is ... <span>&nbsp;</span></p>
                            <ul class="participants">
                            </ul>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
  
    {{-- Ad Popup --}}
    <div class="ad_popup">
        <iframe src="https://www.youtube.com/" frameborder="0"></iframe>
        <div id="result"></div>
      </div>
      {{-- Ad Popup --}}
      
@endsection