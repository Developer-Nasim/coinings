@extends('layouts.frontend')
@section('front-end')

    <!-- inner banner start -->
    <section id="banner-section" class="inner-banner games">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <img src="{{asset('frontend/assets/images/games2-banner-right.png')}}" class="banner-side" alt="image">
                <div class="row d-flex justify-content-start">
                    <div class="col-lg-12">
                        <div class="text-area">
                            <h1>Games</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex">
                                        <li class="breadcrumb-item"><a href="#">All the avilable games here.</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Available Game In start -->
    <section id="available-game-section" class="index-2 games-2"> 
        <div class="container mt-5 mb-5">
            <div class="row contained-area mb-30-none">
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-1.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-2.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-3.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-4.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-5.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-6.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-7.png')}}" alt="image"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/top-game-8.png')}}" alt="image"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Game In end -->  

    <!-- Todays winner In start -->
    <section id="todays-winner-section" class="home">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 d-grid align-items-center">
                        <div class="section-header">
                            <h2 class="title">Biggest <span>Winners</span></h2>
                            <button type="button" class="cmn-btn-alt cmn-btn" data-toggle="modal"
                            data-target="#signUpModalWin">
                            Start Playing!
                            </button>
                            <div class="modal register fade" id="signUpModalWin" tabindex="-1" role="dialog"
                                aria-labelledby="signUpModalWinTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="signUpModalWinTitle">
                                                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="image">
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <img src="{{asset('frontend/assets/images/cross-icon-1.png')}}" alt="image">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="welcome">Welcome back</h5>
                                            <p>Not a member? <a href="javascript:void(0)">REGISTER</a></p>
                                            <div class="form-area">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input class="form-control"
                                                            placeholder="Registered Email Address." type="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Password"
                                                            type="password">
                                                    </div>
                                                    <div class="form-group d-flex justify-content-end">
                                                        <label><a href="javascript:void(0)">Not a member?</a></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="cmn-btn cmn-btn-alt"> Sign
                                                            In</button>
                                                    </div>
                                                </form>
                                                <div class="reg-with">
                                                    <p>Register in directly with</p>
                                                    <div class="social-area d-flex justify-content-center">
                                                        <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/twitter.png')}}" alt="image"></a>
                                                        <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/facebook.png')}}" alt="image"></a>
                                                        <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/linkedin.png')}}" alt="image"></a>
                                                        <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/google.png')}}" alt="image"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-end jus-end">
                        <div class="mid-area">
                            <img src="{{asset('frontend/assets/images/tropy.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title-area">
                            <img src="{{asset('frontend/assets/images/ribbon.png')}}" alt="image">
                            <h5>Biggest Winners</h5>
                        </div>
                        <div class="winner-chart">
                            <span class="ribbon">Top Winner</span>
                            <div class="single-item d-flex justify-content-between align-items-center">
                                <div class="left-area d-flex align-items-center">
                                    <img src="{{asset('frontend/assets/images/win-1.png')}}" class="pos" alt="image">
                                    <a href="javascript:void(0)" class="name-area d-flex align-items-center">
                                        <img src="{{asset('frontend/assets/images/user-1.png')}}" alt="image">
                                        <h6>Bessie Cooper</h6>
                                    </a>
                                </div>
                                <div class="win-price">
                                    <span>+</span>
                                    <span>56.65994</span>
                                    <span class="cur">ETH</span>
                                    <span><img src="{{asset('frontend/assets/images/double-right-alt.png')}}" alt="image"></span>
                                </div>
                            </div>
                            <div class="single-item d-flex justify-content-between align-items-center">
                                <div class="left-area d-flex align-items-center">
                                    <img src="{{asset('frontend/assets/images/win-2.png')}}" class="pos" alt="image">
                                    <a href="javascript:void(0)" class="name-area d-flex align-items-center">
                                        <img src="{{asset('frontend/assets/images/user-2.png')}}" alt="image">
                                        <h6>Jerome Bell</h6>
                                    </a>
                                </div>
                                <div class="win-price">
                                    <span>+</span>
                                    <span>56.65994</span>
                                    <span class="cur">ETH</span>
                                    <span><img src="{{asset('frontend/assets/images/double-right-alt.png')}}" alt="image"></span>
                                </div>
                            </div>
                            <div class="single-item d-flex justify-content-between align-items-center">
                                <div class="left-area d-flex align-items-center">
                                    <img src="{{asset('frontend/assets/images/win-3.png')}}" class="pos" alt="image">
                                    <a href="javascript:void(0)" class="name-area d-flex align-items-center">
                                        <img src="{{asset('frontend/assets/images/user-3.png')}}" alt="image">
                                        <h6>Darrell Steward</h6>
                                    </a>
                                </div>
                                <div class="win-price">
                                    <span>+</span>
                                    <span>56.65994</span>
                                    <span class="cur">ETH</span>
                                    <span><img src="{{asset('frontend/assets/images/double-right-alt.png')}}" alt="image"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Todays winner In end -->

    <!-- Testimonial Start-->
    <section id="testimonial" class="game-2">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title">Player Testimonials</h2>
                            <p>We’d love to tell you some Gamers stories</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-carousel">
                    <div class="col">
                        <div class="single-item text-center">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="javascript:void(0)"><h5>Amazing Support!</h5></a>
                            <p>My VIP host is awesome - there’s no problem she can’t handle. And she always replies
                                super fast!</p>
                            <div class="profile">
                                <img src="{{asset('frontend/assets/images/testimo-1.png')}}" alt="image">
                                <a href="javascript:void(0)"><h6>Tom Powell</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-item text-center">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="javascript:void(0)"><h5>So many bonuses!</h5></a>
                            <p>My favorite thing about Gamebll is bonuses - I can always find what I came for!</p>
                            <div class="profile">
                                <img src="{{asset('frontend/assets/images/testimo-2.png')}}" alt="image">
                                <a href="javascript:void(0)"><h6>Maria Parker</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-item text-center">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="javascript:void(0)"><h5>Pleasure & winnings!</h5></a>
                            <p>I’m thrilled to have found such an amazing place to spend my free time.</p>
                            <div class="profile">
                                <img src="{{asset('frontend/assets/images/testimo-3.png')}}" alt="image">
                                <a href="javascript:void(0)"><h6>Logan Rogers</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-item text-center">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="javascript:void(0)"><h5>So many bonuses!</h5></a>
                            <p>My favorite thing about Gamebll is bonuses - I can always find what I came for!</p>
                            <div class="profile">
                                <img src="{{asset('frontend/assets/images/testimo-2.png')}}" alt="image">
                                <a href="javascript:void(0)"><h6>Maria Parker</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->
 
@endsection