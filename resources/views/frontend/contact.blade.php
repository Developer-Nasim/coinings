@extends('layouts.frontend')
@section('front-end') 

    
    <div class="contents">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-md-2">
                    <div class="content-wrp"> 
                            @if ($msg = session('msg') && $msg = session('msg') == "success")  
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Successfully message sent.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @elseif($msg = session('msg') && $msg = session('msg') == "failed")  
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Wrong!</strong> Sorry something wents wrong.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                
                        <form action="/submit/contact" method="POST">
                            @csrf
                            <h3>Contact us</h3>
                            <label for="">
                                <input type="name" name="name" placeholder="Name" required> 
                            </label>
                            <label for="">
                                <input type="email" name="email" placeholder="Email" required> 
                            </label>
                            <label for="">
                                <textarea name="message" id="" placeholder="your message" required></textarea>
                            </label>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 


@endsection