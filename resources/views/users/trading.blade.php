@extends('profile')
@section('title', 'Home | ERCC')
@section('content')




    <div class="main-content" style="font-size: 13px">


        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Trading </div>
                    <div class="card-body">



                        <iframe height="355" width="950" src="https://sslcharts.forexprostools.com/index.php?force_lang=1&pair_ID=1&timescale=300&candles=50&style=candles"></iframe>
                        <br /><div style="width:500px"><a target="_blank" href="https://www.investing.com">
                                <img src="https://wmt-invdn-com.akamaized.net/forexpros_en_logo.png" alt="Investing.com" title="Investing.com" style="float:left" border="0"/></a>
                           </div>
                        {!! Form::open(array('route' => 'registration.post', 'files' => true)) !!}

                        <div class="card">
                            <div class="card-body">
                                <div class="form-inline">

                                    <br>
                                    <br>
                                    <br>
                                    <br>


                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection