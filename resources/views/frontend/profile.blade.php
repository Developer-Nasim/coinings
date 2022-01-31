@extends('layouts.frontend')
@section('front-end')
 
@php
    $totalCoin  = App\earnedCoins::where([['user_id', Auth::user()->id],['status','running']])->sum('coins');
    $CoinPrice  = App\ValueOfCoin::get()->first();
    $total      = 0;
    if ($totalCoin) {
        $total = $totalCoin;
    }
@endphp
    {{-- Porfile page --}}
    <div class="profile_area">
        <div class="container">
            <div class="row">
                @if ($CoinPrice) 
                    <div class="col-lg-12">
                        <p class="coin_price text-center mb-5">Today coin price is {{$CoinPrice->total_coin}} coin {{$CoinPrice->value}} Taka</p>
                    </div>
                @endif
                <div class="col-lg-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-earning-tab" data-toggle="pill" href="#v-pills-earning" role="tab" aria-controls="v-pills-earning" aria-selected="false">Earnings</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="v-pills-tabContent"> 
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <ul>
                                <li><span>Name</span> : <b>{{Auth::user()->name}}</b></li>
                                <li><span>Email</span> : <b>{{Auth::user()->email}}</b></li>
                                <li><a href="#" class="btn btn-danger mt-5">Change your password</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-earning" role="tabpanel" aria-labelledby="v-pills-earning-tab">
                            <div class="earninga">
                                <div class="avileble_coin">
                                    @if ($total >= 300) 
                                        <button type="button" style="width:100%" class="btn btn-success mb-3" data-toggle="modal" data-target="#PayoutsModalReg">Withdraw now <i class="fas fa-coins"></i> {{$total}}</button>
                                    @else
                                        <button type="button" style="width:100%" class="btn btn-danger mb-3" title="Minimum 300 coin need to Withdrawal" data-toggle="modal" data-target="#PayoutsModalReg">You can't Withdrawal now <i class="fas fa-coins"></i> {{$total}}</button> 
                                    @endif
                                </div>
                                <div> 
                                    <table class="table" style="color: #fff">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Coins</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Number</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>300</td>
                                            <td>45 Taka</td>
                                            <td>+8801405618060</td>
                                            <td>2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>300</td>
                                            <td>45 Taka</td>
                                            <td>+8801405618060</td>
                                            <td>2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>300</td>
                                            <td>45 Taka</td>
                                            <td>+8801405618060</td>
                                            <td>2022</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="profile-setting">
                                <ul>
                                    <li><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#AccountDeleteModal">Account Delete</a></li>
                                    <li><a href="#" class="btn btn-danger mt-5">Change your password</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    {{-- Porfile page --}}
 
  
  <!-- Modal -->
  <div class="modal register fade" id="PayoutsModalReg" tabindex="-1" role="dialog" aria-labelledby="PayoutsModalRegTitle" aria-hidden="true"> 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Payout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
            @if ($total >= 300) 
                <form action="">
                    <label for="">
                        <input type="text" name="" value="+8801" name="number" placeholder="Add your bkash number">
                    </label>
                    <button type="submit">Submit</button>
                </form>
                <button type="button" style="width:100%" class="btn btn-success mb-3" data-toggle="modal" data-target="#PayoutsModalReg">Withdraw now <i class="fas fa-coins"></i> {{$total}}</button>
            @else
                <div class="cant_payout">
                    <h2>Sorry</h2>
                    <p>Sorry you can't Withdraw now you need Minimum 300 coin</p>
                </div>
            @endif
        </div> 
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal register accountDelete fade" id="AccountDeleteModal" tabindex="-1" role="dialog" aria-labelledby="AccountDeleteModalTitle" aria-hidden="true"> 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
            <div class="cant_payout">
                <h2>Are you sure?</h2>
                <p>Are you sure you want to delete this account? 
                    @if ($total >= 0)
                        if you will delete then you will never get the coins back so please at first widthdraw this coin then delete
                    @endif
                </p>
                <a href="/delete/my/account" class="btn btn-danger">Yes Delete</a>
                @if ($total <= 0)
                    <a href="/delete/my/account" class="btn btn-danger">Yes Delete</a>
                @endif
            </div>
        </div> 
      </div>
    </div>
  </div>

  @if ($as = session('status') && $as = session('status') == "success")
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <script>
        document.getElementById('logout-form').submit();
    </script>
  @endif


@endsection