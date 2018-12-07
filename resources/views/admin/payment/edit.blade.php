@extends('admin')
@section('title', 'Home | ERCC')
@section('content')


    <div class="app-wrap">

        <!-- BEGIN .app-container -->
        <div class="app-container">


            <!-- BEGIN .app-main -->
            <div class="app-main">
                <!-- BEGIN .main-heading -->
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="page-icon">
                                    <i class="icon-center_focus_strong"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Edit {{$payment->name}}</h5>


                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                <!-- END: .main-heading -->
                <!-- BEGIN .main-content -->
                <div class="main-content">
                    <!-- Row start -->
                    <div class="row gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">

                                        <div class="card-body">
                                            {!! Form::model($payment, ['route' => ['payment.update', $payment->id], 'method' => 'PUT']) !!}



                                            <div class="form-group">
                                                {{ Form::text('name', null,
                                                  ["class" => 'form-control form-control-lg',
                                                  "placeholder"=>"FIRST NAME"])
                                                }}
                                            </div>



                                            <div class="form-group">
                                                <div class="row text-center">
                                                    <button type="submit" class="btn btn-primary ">Update Payment</button>
                                                </div>
                                            </div>

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
                <!-- END: .main-content -->
            </div>
            <!-- END: .app-main -->
        </div>
        <!-- END: .app-container -->
        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            Copyright Kadmin Admin 2017.
        </footer>
        <!-- END: .main-footer -->
    </div>


@endsection