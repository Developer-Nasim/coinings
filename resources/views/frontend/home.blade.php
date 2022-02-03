@extends('layouts.frontend')
@section('front-end')
      
    <!-- banner-section start -->
    <section id="banner-section">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="main-content">
                            <div class="top-area justify-content-center text-center">
                                <h1>Play, Earn &<br> <span>Chill!</span></h1>
                                <p>Free, Fun & Fair Earning For Everyone</p>
                                <a href="/games" class="cmn-btn" >Start Playing!</a>
                                <div class="modal register fade" id="signUpModalReg" tabindex="-1" role="dialog"
                                    aria-labelledby="signUpModalRegTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="signUpModalRegTitle">
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
                            <div class="row justify-content-center">
                                <div class="col-lg-12"> 
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="bottom-area text-center">
                                                <img src="{{asset('frontend/assets/images/banner-illu.png')}}" alt="banner-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ani-illu">
                                        <img class="left-1 wow fadeInUp" src="{{asset('frontend/assets/images/banner-left-obj.png')}}" alt="image">
                                        <img class="right-2 wow fadeInUp" src="{{asset('frontend/assets/images/banner-right-obj.png')}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-item d-flex">
                                    <div class="left-area align-items-center">
                                        <img src="{{asset('frontend/assets/images/banner-bottom-1.png')}}" alt="image">
                                    </div>
                                    <div class="right-area">
                                        <h4>PLAY</h4>
                                        <p>A huge collection of web and mobile games.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-item d-flex">
                                    <div class="left-area align-items-center">
                                        <img src="{{asset('frontend/assets/images/banner-bottom-3.png')}}" alt="image">
                                    </div>
                                    <div class="right-area">
                                        <h4>EARN</h4>
                                        <p>Your Wombucks or prize money from challenges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-item d-flex">
                                    <div class="left-area align-items-center">
                                        <img src="{{asset('frontend/assets/images/banner-bottom-2.png')}}" alt="image">
                                    </div>
                                    <div class="right-area">
                                        <h4>Cash</h4>
                                        <p>Get Cash as per your coins.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
     
    <!-- Available Game In start -->
    <section id="available-game-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="title">Available Games</h2> 
                        </div>
                    </div> 
                </div>
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
        </div>
    </section>
    <!-- Available Game In end -->

    <!-- Level up In start 
    <section id="level-up-section">
        <div class="overlay pt-120 pb-120">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-area d-flex justify-content-lg-center">
                            <img src="{{asset('frontend/assets/images/level-up-left.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="container wow fadeInUp">
                            <div class="row">
                                <div class="col-lg-10 align-items-center right-area">
                                    <div class="section-header">
                                        <h2 class="title">LEVEL UP! GET REWARDS</h2>
                                        <p>Each time you reach a new level you'll get a reward</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <div class="single-item">
                                                <img src="{{asset('frontend/assets/images/freespins-icon.png')}}" alt="image">
                                                <h6>Freespins</h6>
                                            </div>
                                            <div class="single-item">
                                                <img src="{{asset('frontend/assets/images/bonuses-icon.png')}}" alt="image">
                                                <h6>BONUSES</h6>
                                            </div>
                                            <div class="single-item">
                                                <img src="{{asset('frontend/assets/images/tournaments-icon.png')}}" alt="image">
                                                <h6>TOURNAMENTS</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Level up In end -->

    <!-- Todays winner In start -->
    <section id="todays-winner-section" class="home">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 d-grid align-items-center">
                        <div class="section-header">
                            <h2 class="title">Biggest <span>Winners</span></h2>
                            <a href="/games" class="cmn-btn" >Start Playing!</a>
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
                                    <span>৳</span>
                                    <span>56.65994</span> 
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
                                    <span>৳</span>
                                    <span>56.65994</span> 
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
                                    <span>৳</span>
                                    <span>56.65994</span> 
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

    <!-- Counter In start -->
    <section id="counter-section">
        <div class="overlay">
            <div class="container">
                <div class="row mb-40-none">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item mb-40 text-center">
                            <img src="{{asset('frontend/assets/images/counter-icon-1.png')}}" alt="image">
                            <span class="count"> <span class="counter">133501</span></span>
                            <h6>TOTAL USER</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <img src="{{asset('frontend/assets/images/counter-icon-2.png')}}" alt="image">
                            <span class="count">$ <span class="counter">81237619</span></span>
                            <h6>TOTAL PAID</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <img src="{{asset('frontend/assets/images/counter-icon-3.png')}}" alt="image">
                            <span class="count"><span class="counter">100</span>%</span>
                            <h6>SECURE</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item mb-40 text-center">
                            <img src="{{asset('frontend/assets/images/counter-icon-4.png')}}" alt="image">
                            <span class="count"><span class="counter">24</span>/<span class="counter">7</span></span>
                            <h6>SUPPORT</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter In end --> 

    <!-- faq start -->
    
    <section id="faq-section">
        <div class="overlay pb-120">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h2 class="title">Our most common questions</h2>
                            <p>Do you have a question about Gamebll? Please contact us! We would love
                                to answer your questions.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 d-flex align-items-center cus-mb">
                        <div class="left-area">
                            <span>
                                <img src="{{asset('frontend/assets/images/faq-left.png')}}" alt="image">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp">
                        <div id="accordion-one">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h6 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Can I earn money playing on Gamebll?
                                        </button>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Yes you can earn a lot of money on Gamebll but you have to provide good enough time then you could earn. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h6 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Are there any benefits other than money?
                                        </button>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Ahh here you could spend your time as well</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h6 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What is a challenge, and how do I join one?
                                        </button>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>here don't have any challenge you need to register and then get started playing and earning nothing more and at the end while you will earn a good amount of money then you could cashout them to your account.</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h6 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Is it secure?
                                        </button>
                                    </h6>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Yes of course it is secure and so much easy.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq end -->

@endsection
