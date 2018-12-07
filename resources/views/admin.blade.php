<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bitech Capital</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/fonts/icomoon/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


    <!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
    <!-- Chartist css -->
    <link href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet">


</head>
<body>


<!-- Loading starts -->
<div class="loading-wrapper">
    <div class="loading"></div>
</div>
<!-- Loading ends -->

<!-- BEGIN .app-wrap -->
<div class="app-wrap">
    <!-- BEGIN .app-heading -->
    <header class="app-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
                    <a href="/dashboard" class="logo">
                        {{--<img src="admin/img/unify.png" alt="Unify Admin Dashboard">--}}
                        <h4 style="color: white;">Dashboard</h4>
                    </a>
                    <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                        <i class="icon-sort"></i>
                    </a>
                    <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                        <i class="icon-chevron-thin-left"></i>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-4">
                    <ul class="header-actions">


                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <img class="avatar" src="/admin/img/user.png" alt="User Thumb">
                                <i class="icon-chevron-small-down"></i>
                            </a>
                            <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">

                                <div class="logout-btn">
                                    <a href="/logout" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .app-heading -->
    <!-- BEGIN .app-container -->
    <div class="app-container">
        <!-- BEGIN .app-side -->
        <aside class="app-side" id="app-side">
            <!-- BEGIN .side-content -->
            <div class="side-content ">
                <!-- BEGIN .user-profile -->
                <div class="user-profile">
                    <img src="/admin/img/user.png" class="profile-thumb" alt="User Thumb">
                    <h6 class="profile-name">{!! Helper::username() !!}</h6>
                </div>
                <!-- END .user-profile -->
                <!-- BEGIN .side-nav -->
                <nav class="side-nav">
                    <!-- BEGIN: side-nav-content -->
                    <ul class="unifyMenu" id="unifyMenu">



                        <li>
                            <a href="/dashboard">
										<span class="has-icon">
											<i class="icon-tabs-outline"></i>
										</span>
                                <span class="nav-title">Users</span>
                            </a>


                        </li>

                        <li>
                            <a href="/dashboard" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-coin-dollar"></i>
										</span>
                                <span class="nav-title">Finance</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="/user_deposits">Deposits</a>
                                </li>
                                <li>
                                    <a href="/user_withdrawals">Withdrawals</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="/payment_methods">
										<span class="has-icon">
											<i class="icon-payment"></i>
										</span>
                                <span class="nav-title">Payment Methods</span>
                            </a>

                        </li>

                        <li>
                            <a href="/send-mail">
										<span class="has-icon">
											<i class="icon-mail6"></i>
										</span>
                                <span class="nav-title">Send Mail</span>
                            </a>

                        </li>

                    </ul>
                    <!-- END: side-nav-content -->
                </nav>
                <!-- END: .side-nav -->
            </div>
            <!-- END: .side-content -->
        </aside>
        <!-- END: .app-side -->
        @if(session('error'))


            <div class="alert alert-danger" style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="icon-warning2"></i><strong>Oh snap!</strong> {{session('error')}}
            </div>


        @endif
        @if(session('success'))

            <div class="alert alert-success"style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="icon-tick"></i><strong>Well done!</strong> {{session('success')}}
            </div>

        @endif
        @yield('content')
    </div>
    <!-- END: .app-container -->
    <!-- BEGIN .main-footer -->
    <footer class="main-footer fixed-btm">
        Copyright Kadmin Admin 2018.
    </footer>
    <!-- END: .main-footer -->
</div>
<!-- END: .app-wrap -->


<script src="{{ asset('admin/js/jquery.js')}}"></script>
<script src="{{ asset('admin/js/tether.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/vendor/unifyMenu/unifyMenu.js')}}"></script>
<script src="{{ asset('admin/vendor/onoffcanvas/onoffcanvas.js')}}"></script>
<script src="{{ asset('admin/js/moment.js')}}"></script>
<script src="{{ asset('admin/vendor/slimscroll/slimscroll.min.js')}}"></script>
<script src="{{ asset('admin/vendor/slimscroll/custom-scrollbar.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/chartist.min.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/chartist-tooltip.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-line-chart.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-line-chart1.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-area-chart.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/donut-chart2.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-line-chart4.js')}}"></script>
<script src="{{ asset('admin/js/common.js')}}"></script>

</body>
</html>
