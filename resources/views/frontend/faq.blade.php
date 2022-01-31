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
    <section id="faq-page" class="faq">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="title">frequently asked questions</h2>
                            <p>Play in multi-player tournaments or head to head for cash prizes.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link cmn-btn active" id="account-tab" data-toggle="tab" href="#account" role="tab"
                                    aria-controls="account" aria-selected="true">account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link cmn-btn" id="deposits-tab" data-toggle="tab" href="#deposits" role="tab"
                                    aria-controls="deposits" aria-selected="false">deposits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link cmn-btn" id="games-tab" data-toggle="tab" href="#games" role="tab"
                                    aria-controls="games" aria-selected="false">games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link cmn-btn" id="security-tab" data-toggle="tab" href="#security" role="tab"
                                    aria-controls="security" aria-selected="false">security</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <h4>My account</h4>
                                <div id="accordion-one">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    How do I create an Gamebll account?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion-one">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Help! I've forgotten my password!
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion-one">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    How do I add another currency to my account?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion-one">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    How do I switch from one currency to another?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordion-one">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                            <div class="tab-pane fade" id="deposits" role="tabpanel" aria-labelledby="deposits-tab">
                                <h4>Deposits & Withdrawals</h4>

                                <div id="accordion-two">
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse5"
                                                    aria-expanded="true" aria-controls="collapse5">
                                                    What currencies does Gamebll accept?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse5" class="collapse show" aria-labelledby="heading5"
                                            data-parent="#accordion-two">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading6">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse6" aria-expanded="false"
                                                    aria-controls="collapse6">
                                                    How long till a deposit shows up on my account?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                            data-parent="#accordion-two">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading7">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse7" aria-expanded="false"
                                                    aria-controls="collapse7">
                                                    Will I be charged any fees for making deposits or withdrawals?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                            data-parent="#accordion-two">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading8">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse8" aria-expanded="false"
                                                    aria-controls="collapse8">
                                                    I have made a deposit but the Bitcoins have not been credited to my account. What should I do?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                            data-parent="#accordion-two">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="games" role="tabpanel" aria-labelledby="games-tab">
                                <h4>Games</h4>


                                <div id="accordion-three">
                                    <div class="card">
                                        <div class="card-header" id="heading9">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse9"
                                                    aria-expanded="true" aria-controls="collapse9">
                                                    Are Gamebll's games fair?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse9" class="collapse show" aria-labelledby="heading9"
                                            data-parent="#accordion-three">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading10">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse10" aria-expanded="false"
                                                    aria-controls="collapse10">
                                                    Can I play the casino games without spending any money?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                            data-parent="#accordion-three">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading11">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse11" aria-expanded="false"
                                                    aria-controls="collapse11">
                                                    What happens if the game I’m playing freezes in the middle of a round?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                            data-parent="#accordion-three">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading12">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse12" aria-expanded="false"
                                                    aria-controls="collapse12">
                                                    I can’t get the casino game to start when I click the link. What should I do?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                            data-parent="#accordion-three">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading13">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse13" aria-expanded="false"
                                                    aria-controls="collapse13">
                                                    Why do I have some unfinished games showing in my Profile?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse13" class="collapse" aria-labelledby="heading13"
                                            data-parent="#accordion-three">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                <h4>Security</h4>


                                <div id="accordion-four">
                                    <div class="card">
                                        <div class="card-header" id="heading14">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse14"
                                                    aria-expanded="true" aria-controls="collapse14">
                                                    Is all my information secure at Gamebll?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse14" class="collapse show" aria-labelledby="heading14"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading15">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse15" aria-expanded="false"
                                                    aria-controls="collapse15">
                                                    Will I need to verify my account when I make a deposit or withdrawal?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse15" class="collapse" aria-labelledby="heading15"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading16">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse16" aria-expanded="false"
                                                    aria-controls="collapse16">
                                                    How do I submit my documents?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse16" class="collapse" aria-labelledby="heading16"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading17">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse17" aria-expanded="false"
                                                    aria-controls="collapse17">
                                                    How long does it take before my documents are approved?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse17" class="collapse" aria-labelledby="heading17"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading18">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse18" aria-expanded="false"
                                                    aria-controls="collapse18">
                                                    Can my documents be rejected?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse18" class="collapse" aria-labelledby="heading18"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading19">
                                            <h6 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse19" aria-expanded="false"
                                                    aria-controls="collapse19">
                                                    Where can I see the status of my documents?
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapse19" class="collapse" aria-labelledby="heading19"
                                            data-parent="#accordion-four">
                                            <div class="card-body">
                                                <p>Duis sapien justo, posuere interdum mauris eu, tincidunt placerat ante. Curabitur aliquet leo ipsum, at maximus dolor fringilla vel. Aliquam sagittis elementum volutpat. Vestibulum vel arcu nisl.</p>
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
    <!-- FAQ end -->

@endsection