@extends('profile')
@section('title', 'Home | ERCC')
@section('content')


    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-beaker"></i>
                    </div>
                    <div class="page-title">
                        <h5>Deposit Funds</h5>
                        <h6 class="sub-heading">fund your accounts</h6>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

                </div>
            </div>
        </div>
    </header>
    <!-- BEGIN .main-content -->
    <div class="main-content">

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Deposit Fund</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Deposit History</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">



                                {!! Form::open(array('route' => 'registration.post', 'files' => true)) !!}

                                <div class="card">
                                    <div class="card-header">Fund Your Account </div>
                                    <div class="card-body">
                                        <div class="form-inline">

                                            <select class="form-control" name="wallet_id" style="width: 45%; margin-right:10px">
                                                <option selected="selected">--Select Wallet--</option>
                                                <?php foreach($wallets as $key => $value) { ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->wallet_name ?></option>
                                                <?php }?>
                                            </select>

                                            {{ Form::text('phone', null,
                                                ["class" => 'form-control','style'=>"width: 45%",
                                                'id'=>"phone",
                                                "placeholder"=>"Deposit Amount (Amount you will send)"])
                                             }}
                                            <br>
                                            <br>
                                            <br>
                                            {{
                                              Form::select('sex',
                                              array(
                                              'Paypal' => 'Paypal',
                                              'Bank Payment' => 'Bank Payment',



                                              ),
                                              NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                              'placeholder' => 'Payment Method (How you intend to make payment)',
                                              'id'=> 'gender'))
                                           }}

                                            {{ Form::text('phone', null,
                                               ["class" => 'form-control','style'=>"width: 45%",
                                               'id'=>"phone",
                                               "placeholder"=>"You will send"])
                                            }}

                                        </div>
                                        <br>
                                        <br>
                                        <div class="row text-center">
                                            <button type="submit" class="btn btn-primary"> Deposit Fund</button>
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}


                            </div>

                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                history
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection