@extends('profile')
@section('title', 'Home | ERCC')
@section('content')




    <div class="main-content" style="font-size: 13px">


        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">{{$wallet_name->wallet_name}} </div>
                    <div class="card-body">

                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true"><b>Transaction History</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false"><b>Exchange Currency</b></a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">

                                @if( (Helper::wallethistory(1))->count() === 0)
                                    <br>
                                    <br>
                                    <h6 style="text-align: center"> No transactions found in your {{$wallet_name->wallet_name}} Account!
                                        Get started by adding some funds to your wallet!
                                        <br>
                                        <br>
                                        <a href="/fundWallet" class="btn btn-primary">Add fund</a>
                                    </h6>


                                @else


                                    {!! Form::open(array('route' => 'registration.post', 'files' => true)) !!}

                                    <div class="card">
                                        <div class="card-header">Fund Your Account </div>
                                        <div class="card-body">
                                            <div class="form-inline">
                                                {{
                                                   Form::select('sex',
                                                   array(
                                                   'Bitcoin (BTC4379269) / 3.556 BTC / $21336.00' => 'Bitcoin (BTC4379269) / 3.556 BTC / $21336.00',

                                                   ),
                                                   NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                                   'placeholder' => 'Wallet ID (The wallet you intend to fund)',
                                                   'id'=> 'gender'))
                                                }}

                                                {{ Form::text('phone', null,
                                                    ["class" => 'form-control','style'=>"width: 45%",
                                                    'id'=>"phone",
                                                    "placeholder"=>"Deposit Amount (Amount to withdraw ($)"])
                                                 }}
                                                <br>
                                                <br>
                                                <br>
                                                {{
                                                  Form::select('sex',
                                                  array(
                                                  'Male' => 'Bitcoin',
                                                  'Female' => 'Litecoin',
                                                  'Ethereum' => 'Ethereum',
                                                  'Nexus' => 'Nexus',
                                                  'Perfect Money USD' => 'Perfect Money USD',
                                                  'Bank Transfer' => 'Bank Transfer',
                                                  'Western Union' => 'Western Union',
                                                  'Moneygram' => 'Moneygram',
                                                  'Neteller' => 'Neteller',
                                                  'Credit Card' => 'Credit Card',
                                                  'TRON' => 'TRON',

                                                  ),
                                                  NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                                  'placeholder' => 'Withdrawal Method (How you want your payment)',
                                                  'id'=> 'gender'))
                                               }}

                                                {{ Form::text('phone', null,
                                                   ["class" => 'form-control','style'=>"width: 45%",
                                                   'id'=>"phone",
                                                   "placeholder"=>"We will send"])
                                                }}

                                            </div>
                                            <br>
                                            <br>
                                            <div class="row text-center">
                                                <button type="submit" class="btn btn-primary"> Withdraw Fund</button>
                                            </div>
                                        </div>
                                    </div>

                                    {!! Form::close() !!}


                               @endif
                            </div>

                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                {!! Form::open(array('route' => 'registration.post', 'files' => true)) !!}

                                <div class="card">
                                    <div class="card-header">Currency Conversion</div>
                                    <div class="card-body">
                                        <div class="form-inline">
                                            {{
                                               Form::select('sex',
                                               array(
                                               'Bitcoin (BTC4379269) / 3.556 BTC / $21336.00' => 'Bitcoin (BTC4379269) / 3.556 BTC / $21336.00',

                                               ),
                                               NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                               'placeholder' => 'Wallet ID (The wallet you intend to convert from)',
                                               'id'=> 'gender'))
                                            }}

                                            {{ Form::text('phone', null,
                                                ["class" => 'form-control','style'=>"width: 45%",
                                                'id'=>"phone",
                                                "placeholder"=>"Deposit Amount (Amount to withdraw ($)"])
                                             }}
                                            <br>
                                            <br>
                                            <br>
                                            {{
                                              Form::select('sex',
                                              array(
                                              'Male' => 'Bitcoin',
                                              'Female' => 'Litecoin',
                                              'Ethereum' => 'Ethereum',
                                              'Nexus' => 'Nexus',
                                              'Perfect Money USD' => 'Perfect Money USD',
                                              'Bank Transfer' => 'Bank Transfer',
                                              'Western Union' => 'Western Union',
                                              'Moneygram' => 'Moneygram',
                                              'Neteller' => 'Neteller',
                                              'Credit Card' => 'Credit Card',
                                              'TRON' => 'TRON',

                                              ),
                                              NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                              'placeholder' => 'Withdrawal Method (How you want your payment)',
                                              'id'=> 'gender'))
                                           }}

                                            {{ Form::text('phone', null,
                                               ["class" => 'form-control','style'=>"width: 45%",
                                               'id'=>"phone",
                                               "placeholder"=>"We will send"])
                                            }}

                                        </div>
                                        <br>
                                        <br>
                                        <div class="row text-center">
                                            <button type="submit" class="btn btn-primary"> Convert Currency</button>
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>



@endsection