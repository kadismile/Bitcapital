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
                    <h5>Investment</h5>your investments</h6>
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
                            <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Investment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Invest Fund</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">


                            No investment found in your account.

                        </div>

                        <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>INVESTMENT PACKAGE</th>
                                    <th>MINIMUM DEPOSIT</th>
                                    <th>MAXIMUM DEPOSIT</th>
                                    <th>DAILY PROFIT</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Basic</td>
                                        <td style="color: red">$2,000.00</td>
                                        <td style="color: green">$2,000.00</td>
                                        <td>5%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Standard</td>
                                        <td style="color: red">$5,000.00</td>
                                        <td style="color: green">$5,000.00</td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Advanced</td>
                                        <td style="color: red">$10,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>15%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Premium</td>
                                        <td style="color: red">$15,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Ultimate</td>
                                        <td style="color: red">$20,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Gold	</td>
                                        <td style="color: red">$30,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>30%</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Gold</td>
                                        <td style="color: red">$40,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>35%</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Admin</td>
                                        <td style="color: red">$50,000.00</td>
                                        <td style="color: green">No Limit</td>
                                        <td>40%</td>
                                    </tr>



                                </tbody>
                            </table>


                            {!! Form::open(array('route' => 'registration.post', 'files' => true)) !!}

                            <div class="card">
                                <div class="card-header">Fund Your Account </div>
                                <div class="card-body">
                                    <div class="form-inline">
                                        {{
                                           Form::select('sex',
                                          array(
                                                '1' => 'BASIC $1000 AT 2.15% DAILY ROI',
                                                '2' => 'STANDARD $2000 AT 5% DAILY ROI',
                                                '3' => 'ADVANCE $5000  AT 7% DAILY ROI',
                                                '4' => 'PREMIUM $10,000 AT 8.8% DAILY ROI',
                                                '5' => 'ULTIMATE $15,000 AT 10.01% DAILY ROI',
                                                '6' => 'GOLD $20,000 AT 15.15% DAILY ROI',
                                                ),
                                           NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                           'placeholder' => '--Select Package--',
                                           'id'=> 'gender'))
                                        }}

                                        {{ Form::text('phone', null,
                                            ["class" => 'form-control','style'=>"width: 45%",
                                            'id'=>"phone",
                                            "placeholder"=>"Minimum Investment Amount*"])
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
                                          'placeholder' => '--Select Wallet--',
                                          'id'=> 'gender'))
                                       }}

                                        {{ Form::text('phone', null,
                                           ["class" => 'form-control','style'=>"width: 45%",
                                           'id'=>"phone",
                                           "placeholder"=>"Amount to invest ($)"])
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



@endsection