@extends('profile')
@section('title', 'Home | ERCC')
@section('content')



    <!-- BEGIN .main-content -->



    <!-- BEGIN .app-main -->
    <div class="main-content">
        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="page-icon">
                            <i class="icon-beaker"></i>
                        </div>
                        <div class="page-title">
                            <h5>Your referals </h5>
                            <h6 class="sub-heading">all Your referals</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

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
                        <div class="card-header">Your Referals </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Country</th>
                                    <th>Gender</th>


                                </tr>
                                </thead>
                                <tbody>


                                @foreach($referalUserId as $id)


                                    @php($x = 1 )
                                    @foreach(Helper::getUserById($id->user_id) as $user)

                                        <tr>
                                            <th scope="row">{{$x++}}</th>
                                            <td>{{$user->first_name}}  {{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->country}}</td>
                                            <td>{{$user->sex}}</td>

                                        </tr>
                                    @endforeach

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