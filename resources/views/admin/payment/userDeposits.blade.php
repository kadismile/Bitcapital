@extends('admin')
@section('title', 'Home | ERCC')
@section('content')



    <!-- BEGIN .app-main -->
    <div class="app-main">
        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="page-icon">
                            <i class="icon-laptop_windows"></i>
                        </div>
                        <div class="page-title">
                            <h5>Dashboard    </h5>
                            <h6 class="sub-heading">Welcome to Unify Admin Template</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="right-actions">

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END: .main-heading -->
        <!-- BEGIN .main-content -->
        <div class="main-content">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">Listing All Users </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>reference Id</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Date</th>

                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                @php($x = 1 )
                                @foreach($deposits as $deposit)
                                    <?php $users = Helper::getUserById($deposit->user_id) ?>
                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td>{{$deposit->refId}}</td>
                                        <td>
                                            @foreach($users as $user)
                                                {{$user->first_name}}
                                             @endforeach
                                        </td>

                                        <td> {{$deposit->amount}}</td>
                                        <td> {!! Helper::paymetMethod($deposit->payment_method_id) !!}</td>
                                        <td>{{($deposit->created_at)}}</td>


                                        {!! Form::model($deposit, ['route' => ['deposit.update', $deposit->id], 'method' => 'PUT']) !!}
                                            <input type="hidden" name="user_id" value="{{$deposit->user_id}}">
                                            <input type="hidden" name="balance" value="{{$deposit->amount}}">
                                            <td><button type="submit" class="btn btn-primary"> Approve </button></td>
                                        {!! Form::close() !!}
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: .main-content -->
    </div>
    <!-- END: .app-main -->




@endsection