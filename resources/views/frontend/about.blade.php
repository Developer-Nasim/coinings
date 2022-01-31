@extends('layouts.frontend')
@section('front-end')
 
    <!-- inner banner start -->
    <section id="banner-section" class="inner-banner games about">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <img src="{{asset('frontend/assets/images/about-right.png')}}" class="banner-side" alt="image">
                <div class="row d-flex justify-content-start">
                    <div class="col-lg-12">
                        <div class="text-area">
                            <h1>About Us</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bottom about">
                        <div class="overlay">
                            <div class="container wow fadeInUp">
                                <div class="main-content">
                                    <img src="{{asset('frontend/assets/images/about-bottom-illu.png')}}" class="ban-img" alt="image">
                                    <div class="item-area">
                                        <div class="row justify-content-center d-flex">
                                            <div class="col-lg-10 content-item d-flex">
                                                <div class="col">
                                                    <div class="single-item text-center">
                                                        <h2>200*</h2>
                                                        <p>We're proud of our partners</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="single-item text-center">
                                                        <h2>20 mil.</h2>
                                                        <p>A happy is a loyal customer</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="single-item mb-cus text-center">
                                                        <h2>2010—</h2>
                                                        <p>We've been Gaming company since</p>
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
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Story behind Gamebll In start -->
    <section id="story-behind-Gamebll" class="about">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="title">THE STORY BEHIND Gamebll TEAM</h2>
                        <p>Welcome to Gamebll — a perfect place to chill and enjoy some high-level entertainment. The
                            best part? Everything is available for you right here! Enjoy our rich array of charming
                            slots, card games, lotteries, and VIP level treatment!</p>
                        <div class="btn-area d-flex justify-content-center">
                            <a href="javascript:void(0)" class="cmn-btn cmn-btn-alt">Join our team</a>
                            <a href="javascript:void(0)" class="cmn-btn-second">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story behind Gamebll In end -->

    <!-- Leading brand In start -->
    <section id="leading-brand" class="about">
        <div class="overlay pt-120 pb-120">
            <img src="{{asset('frontend/assets/images/leading-brand-Illu.png')}}" class="bg-right" alt="image">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h2 class="title">The Leading Brand of Online Gaming</h2>
                            <p>Gamebll has created tremendous performance in the industry. While dedicating to build a
                                playground on your finger tip, Gamebll gaming attracts great amounts of wagers, has now
                                become the first-tier gaming product.</p>
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item d-flex align-items-center">
                                    <div class="left-side">
                                        <div class="img-area">
                                            <img src="{{asset('frontend/assets/images/leading-icon-1.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h5>Multi- Account</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item d-flex align-items-center">
                                    <div class="left-side">
                                        <div class="img-area">
                                            <img src="{{asset('frontend/assets/images/leading-icon-2.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h5>Transparent</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item d-flex align-items-center">
                                    <div class="left-side">
                                        <div class="img-area">
                                            <img src="{{asset('frontend/assets/images/leading-icon-3.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h5>Security</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item d-flex align-items-center">
                                    <div class="left-side">
                                        <div class="img-area">
                                            <img src="{{asset('frontend/assets/images/leading-icon-4.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <h5>Fast withdraw</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leading brand In end -->

    <!-- Team member In start -->
    <section id="team-member" class="about">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 justify-content-center d-flex">
                        <div class="section-header text-center">
                            <h2 class="title">Our amazing team</h2>
                            <p>Our small team is an incredible group of people</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-cus">
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="img-area">
                                <img src="{{asset('frontend/assets/images/member-1.png')}}" alt="image">
                            </div>
                            <div class="bottom-area">
                                <h5>Jane Wilson</h5>
                                <div class="social-area d-flex">
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/twitter.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/facebook.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/linkedin.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/google.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="img-area">
                                <img src="{{asset('frontend/assets/images/member-2.png')}}" alt="image">
                            </div>
                            <div class="bottom-area">
                                <h5>Jane Cooper</h5>
                                <div class="social-area d-flex">
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/twitter.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/facebook.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/linkedin.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/google.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="img-area">
                                <img src="{{asset('frontend/assets/images/member-3.png')}}" alt="image">
                            </div>
                            <div class="bottom-area">
                                <h5>Jim Moody</h5>
                                <div class="social-area d-flex">
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/twitter.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/facebook.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/linkedin.png')}}" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="{{asset('frontend/assets/images/google.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="img-area">
                                <img src="{{asset('frontend/assets/images/member-4.png')}}" alt="image">
                            </div>
                            <div class="bottom-area">
                                <h5>Jenny Wilson</h5>
                                <div class="social-area d-flex">
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
    </section>
    <!-- Team member In end -->

@endsection