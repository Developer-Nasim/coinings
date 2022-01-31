<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gamebll - eSports and Gaming Template</title>

    <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/games/lucky.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/games/spinner.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/games/tic_tac.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/games/eyes_check.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/games/matching.css')}}">
</head> 
<body>

    @php
        $totalCoin  = App\earnedCoins::where([['user_id', Auth::user()->id],['status','running']])->sum('coins');
        $total      = 0;
        if ($totalCoin) {
            $total = $totalCoin;
        }
    @endphp
 
    <div class="game_header">
        <a href="/games" class="cmn-btn-alt cmn-btn">Back</a> 
        <a href="@yield('game_demo')" target="_blank" class="cmn-btn">Demo</a>  
        <a href="#" class="cmn-btn"><i class="fas fa-coins"></i> {{$total}}</a> 
    </div>
    

    @yield('game')

 
    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/fontawesome.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script> 
    <script src="{{asset('frontend/assets/js/games/lucky.js')}}"></script>
    <script src="{{asset('frontend/assets/js/games/spinner.js')}}"></script>
    <script src="{{asset('frontend/assets/js/games/tic_tac.js')}}"></script>
    <script src="{{asset('frontend/assets/js/games/eyes_check.js')}}"></script>
    <script src="{{asset('frontend/assets/js/games/matching.js')}}"></script>
    <script src="{{asset('frontend/assets/js/dtc_clk.js')}}"></script>
</body> 
</html>