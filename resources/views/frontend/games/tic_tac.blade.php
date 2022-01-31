@extends('layouts.game') 
@section('game_demo') https://www.youtube.com/watch?v=lX3vT_Gm_HE @endsection
@section('game')
 
<div class="i_got_coin"> 
    <button type="button" class="close_point_alert">X</button>
    <div>
        <h1 class="coin_show"> </h1>
        <span class="whoWon" style="display: block;font-size: 40px;margin:auto;text-align:center;margin-top: 20px;">Game Running!</span>
    </div>
  </div>  
  
  
    <div class="the_game tic_tac">  
        <div class="continer">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="tic_tac_game_wrp"> 
                        <table>
                            <tr>
                                <td class="cell" id="0"></td>
                                <td class="cell" id="1"></td>
                                <td class="cell" id="2"></td>
                            </tr>
                            <tr>
                                <td class="cell" id="3"></td>
                                <td class="cell" id="4"></td>
                                <td class="cell" id="5"></td>
                            </tr>
                            <tr>
                                <td class="cell" id="6"></td>
                                <td class="cell" id="7"></td>
                                <td class="cell" id="8"></td>
                            </tr>
                        </table>
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