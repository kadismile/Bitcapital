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
                            <h5>Payment Method</h5>
                            <h6 class="sub-heading">Welcome to Unify Admin Template</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="right-actions">
                            <a href="/payment_new" class="btn btn-primary float-right">
                                Add Payment Type
                            </a>
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
                        <div class="card-header">Listing All Payment Methods </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                @php($x = 1 )
                                @foreach($paymentmethod as $payment)

                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td>{{$payment->name}} </td>
                                        <td><a href="payment/{{$payment->id}}/edit"><span style="color: #593dff">edit</span></a> </td>
                                        <td><a href="payment/{{$payment->id}}/edit"><span style="color: red">x</span></a> </td>


                                        {{--<td>
                                            {{ Form::open(['route' => ['admin.user.delete', $user->id], 'method' => 'delete']) }}
                                            <a type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">x</a>
                                            {{ Form::close() }}</td>
--}}

                                        {{--  <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('admin.user.delete', $user->id)}}"><i class="fa fa-trash"></i></a></td>
  --}}

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