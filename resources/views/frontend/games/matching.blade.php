@extends('layouts.game') 
@section('game_demo') https://www.youtube.com/watch?v=lX3vT_Gm_HE @endsection
@section('game')
    
<div class="i_got_coin">
    <button type="button" class="close_point_alert">X</button>
    <h1 class="coin_show"></h1>
  </div>  
  
  
    <div class="the_game matching"> 
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12"> 
                    <section class="score-panel">
                        <ul class="stars">
                            <li id="one"><i class="fa fa-star"></i></li>
                            <li id="two"><i class="fa fa-star"></i></li>
                            <li id="three"><i class="fa fa-star"></i></li>
                        </ul>     
                    <p><span id="moves">0</span> Moves</p> 
                        <button id="restartClick">
                        <i class="fas fa-redo-alt"></i>
                        </button> 
                    </section>
                    <ul class="deck">
                        <li class="card" tabindex="0">
                            <i class="fas fa-acorn"></i> 
                            <!-- Not supporting -->
                        </li>
                        <li class="card" tabindex="0">
                            <i class="fas fa-album"></i> 
                            <!-- Not supporting -->
                        </li>
                        <li class="card" tabindex="0">
                            <i class="fa fa-anchor"></i>
                        </li>
                        <li class="card" tabindex="0">
                            <i class="fa fa-bolt"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-cube"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-anchor"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-leaf"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-bicycle"></i>
                        </li>
                        <li class="card">
                            <i class="fas fa-acorn"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-bomb"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-leaf"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-bomb"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-bolt"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-bicycle"></i>
                        </li>
                        <li class="card">
                            <i class="fas fa-album"></i>
                        </li>
                        <li class="card">
                            <i class="fa fa-cube"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
<!--  <div id="leader-board" class="leaderboard-modal">
   <div class="result-board">
      <h1 class='board-heading'>Leader-Board</h1>
    <p id="result"></p>
   </div>
</div> -->
  
  <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">

    <h1 id="modal-heading">Congratulation You Won !</h1>
 <div class="result-board">
      <h1 class='board-heading'>Leader Board</h1>
    <p id="result" class="result-text"></p>
   </div>
    <button id="play-again" tabindex ="-1" class="play-again-button">Play again</button>
  
  </div>
</div>

    {{-- Ad Popup --}}
    <div class="ad_popup">
        <iframe src="https://www.youtube.com/" frameborder="0"></iframe>
        <div id="result"></div>
      </div>
      {{-- Ad Popup --}}
      
@endsection