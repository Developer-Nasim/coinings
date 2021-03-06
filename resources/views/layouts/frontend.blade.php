<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <meta name="title" content="Gamebll - eSports and Gaming">
    <meta name="description" content="Gamebll is a online gaming realted site">
    <meta name="keywords" content="gamell,gaming,earning">  
    <meta name="language" content="English">

    <title>Gamebll - eSports and Gaming</title>
    
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"> 
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7680188574822533"
     crossorigin="anonymous"></script>
</head> 
<body>
    @php
        $total      = 0;
        if (Auth::user()) {
            $totalCoin  = App\earnedCoins::where([['user_id', Auth::user()->id],['status','running']])->sum('coins');
            if ($totalCoin) {
                $total = $totalCoin;
            }
        }
    @endphp
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    <!-- header-section start -->
    <header id="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <div class="logo-section flex-grow-1 d-flex align-items-center">
                        <a class="site-logo site-title" href="/">
                            <span class="txt_logo">Gambell</span>
                            {{-- <img src="{{asset('frontend/assets/images/logo.png')}}" alt="site-logo"> --}}
                        </a>
                    </div>
                    <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="navbar-collapse collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto"> 
                                <li class="menu_has_children"><a href="#">Games</a>
                                    <ul class="sub-menu">
                                        <li><a href="/games/lucky-box">Lucky Box</a></li> 
                                        <li><a href="/games/tic-tac">Tic Tac</a></li> 
                                        <li><a href="/games/eyes-check">Eyes Check</a></li> 
                                        <li><a href="/games/spinner">Spinner</a></li>  
                                        <li><a href="/games/">All Games</a></li>  
                                    </ul>
                                </li>  
                                <li><a href="/about-us">About Us</a></li> 
                                <li><a href="/faq">FAQ</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                            @if (!Auth::user()) 
                                <div class="right-area header-action d-flex align-items-center"> 
                                    <a href="/register" class="cmn-btn-alt cmn-btn">Register</a>
                                    <a href="/login" class="cmn-btn">Sign In</a> 
                                </div>
                            @endif
                            @if (Auth::user())  
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                       {{$total ? $total : ""}} <i class="fas fa-user-tie"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/profile">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endif 
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end --> 
    
    
    
<br><br><br><br><br>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7680188574822533"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-6t+ed+2i-1n-4w"
     data-ad-client="ca-pub-7680188574822533"
     data-ad-slot="8471740597"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

 <br><br><br>
 
 
 
 
    @yield('front-end')

 

    <!-- Footer Section start -->
    <footer id="footer-section">
        <div class="overlay">
            <div class="container"> 
                <div class="bottom-area pt-120">
                    <div class="row d-flex header-area">
                        <div class="col-md-2"> 
                            <div class="logo-section">
                                <a class="site-logo site-title" href="/"> 
                                    <span class="txt_logo">Gambell</span>
                                    {{-- <img src="{{asset('frontend/assets/images/logo.png')}}" alt="site-logo"> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <ul class="navbar-nav main-menu d-inline align-items-end"> 
                                <li style="display: inline-block;"><a href="/games">Games</a></li>
                                <li style="display: inline-block;"><a href="/terms_of_service">Terms of Service</a></li>
                                <li style="display: inline-block;"><a href="/privacy-policy">Privacy Policy</a></li>
                                <li style="display: inline-block;"><a href="/contact">Help & Support</a></li> 
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="main-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-7 col-md-7 col-sm-12 d-flex justify-content-start align-items-center justify-cen order-pro">
                            <div class="left-area">
                                <p>Copyright ?? Gamebll all rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 d-flex justify-content-end justify-cen">
                            <div class="social-area d-flex">
                                {{-- <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/twitter.png')}}" alt="image"></a>
                                <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/facebook.png')}}" alt="image"></a>
                                <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/linkedin.png')}}" alt="image"></a>
                                <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/google.png')}}" alt="image"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->


    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/fontawesome.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>  
</body> 
</html>
