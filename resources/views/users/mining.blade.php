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
                        <h5>Mining</h5>my minings</h6>
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
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">My Mining Contract</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Invest Fund</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">

                                <h5>Contract Plan</h5>
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Contract</th>
                                        <th>Hash Rate</th>
                                        <th>Monthly Contract</th>
                                        <th>Yearly Contract</th>
                                        <th>Hardware</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Scrypt Cloud Mining</td>
                                        <td style="color: red">100 GH/s</td>
                                        <td>usd 100.00</td>
                                        <td>usd 2,000.00</td>
                                        <td>HashCoins SCRYPT</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Sha-256 Cloud Mining</td>
                                        <td style="color: red">1,000 GH/s</td>
                                        <td>usd 174.00</td>
                                        <td>usd 2,000.00</td>
                                        <td>SHA-256</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Super Hashpower</td>
                                        <td style="color: red">10,000 GH/s</td>
                                        <td>usd 420.00</td>
                                        <td>usd 5,000.00</td>
                                        <td>GPU Rigs</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Ultimate</td>
                                        <td style="color: red">100,000 GH/s</td>
                                        <td>usd 837.00</td>
                                        <td>usd 10,000.00</td>
                                        <td>Multi-Factor</td>
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
                                                    '1' => 'Script Cloud Mining',
                                                    '2' => 'Sha-256 Cloud Mining',
                                                    '3' => 'Super HashPower',
                                                    '4' => 'Ultimate',

                                                    ),
                                               NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                               'placeholder' => '--Contract--',
                                               'id'=> 'gender'))
                                            }}

                                            {{
                                               Form::select('sex',
                                               array(
                                               'Monthly' => 'Monthly',
                                               'Yearly' => 'Yearly',


                                               ),
                                               NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                               'placeholder' => '--Select Period--',
                                               'id'=> 'gender'))
                                            }}
                                            <br>
                                            <br>
                                            <br>
                                            {{
                                              Form::select('sex',
                                              array(
                                              '1 year' => '1 year',
                                              '2 years' => '2 years',
                                              '3 years' => '3 years',
                                              '4 years' => '4 years',

                                              ),
                                              NULL, array('class' => 'form-control','style'=>"width: 45%; margin-right:10px",
                                              'placeholder' => '--Select Duration--',
                                              'id'=> 'gender'))
                                           }}

                                            {{ Form::text('phone', null,
                                               ["class" => 'form-control','style'=>"width: 45%",
                                               'id'=>"phone",
                                               "placeholder"=>"Amount to invest ($)"])
                                            }}
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            {{ Form::text('phone', null,
                                               ["class" => 'form-control','style'=>"width: 45%;margin-right:10px",
                                               'id'=>"phone",
                                               "placeholder"=>"Contract Price in us dollar"])
                                            }}

                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            {{ Form::text('phone', null,
                                               ["class" => 'form-control','style'=>"width: 45%",
                                               'id'=>"phone",
                                               "placeholder"=>"Contract Price in crypto  "])
                                            }}

                                        </div>
                                        <br>
                                        <br>
                                        <div class="row text-center">
                                            <button type="submit" class="btn btn-primary"> Submit Order</button>
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}

                            </div>

                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection