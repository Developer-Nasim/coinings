@extends('layouts.frontend')
@section('front-end')

    <!-- inner banner start -->
    <section id="banner-section" class="inner-banner games tournaments faq">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <img src="{{asset('frontend/assets/images/tour-left-banner.png')}}" class="banner-left" alt="image">
                <img src="{{asset('frontend/assets/images/faq-banner.png')}}" class="banner-right" alt="image">

                <div class="row d-flex justify-content-start">
                    <div class="col-lg-12">
                        <div class="text-area">
                            <h1>FAQ</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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

    <!-- FAQ start -->
    
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
    <!-- FAQ end -->

@endsection
