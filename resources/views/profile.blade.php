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


    <link href="{{ asset('admin/css/custom-filter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleswitcher.css') }}" rel="stylesheet">

</head>
<body>


<!-- Loading starts -->
<div class="loading-wrapper">
    <div class="loading"></div>
</div>
<!-- Loading ends -->

<div id="showSwitcher" class="styleSecondColor" style="margin-left: 0px; display: block; width: 103px">
    <a href=" https://wa.me/441133201986?text=We%20are%20Bitech%20Capital%2C%20how%20can%20we%20help%20you%20today%20%3F" target="_blank" style="padding-top: 0px;padding-bottom: 0px;">
        <img src="images/icons/whatsapp.png" alt="whatsapp" style="width: 100%;">
    </a>
</div>




<!-- BEGIN .app-wrap -->
<div class="app-wrap">
    <!-- BEGIN .app-heading -->
    <header class="app-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
                    <a href="/account" class="logo">
                        {{--<img src="admin/img/unify.png" alt="Unify Admin Dashboard">--}}
                        <h4 style="color: white; font-size: 17px">Dashboard</h4>
                    </a>
                    <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                        <i class="icon-sort"></i>
                    </a>
                    <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                        <i class="icon-sort"></i>
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4 col-4">
                    <ul class="header-actions">


                       {{-- <li class="dropdown">

                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                --}}{{--<i class="icon-notifications_none"></i>--}}{{--
                                <b style="color: white">Trade Profits</b>
                                <span style="color: #fffb56;">0.00</span>
                                --}}{{--<span class="count-label"></span>--}}{{--
                            </a>

                        </li>
                        <li class="dropdown">

                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                --}}{{--<i class="icon-notifications_none"></i>--}}{{--
                               <b style="color: white">R.O.I</b>
                                <span style="color: #1fe1ff;">0.00</span>
                                --}}{{--<span class="count-label"></span>--}}{{--
                            </a>

                        </li>

                        <li class="dropdown">

                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                --}}{{--<i class="icon-notifications_none"></i>--}}{{--
                                <b style="color: white">Balance</b>
                                <span style="color: #33ff27;">${!! number_format(Helper::balance(Helper::get_user()->id) )!!}</span>
                                --}}{{--<span class="count-label"></span>--}}{{--
                            </a>

                        </li>

                        <li class="dropdown">

                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                --}}{{--<i class="icon-notifications_none"></i>--}}{{--
                                <b style="color: white">Balance</b>
                                <span style="color: #33ff27;">${!! number_format(Helper::balance(Helper::get_user()->id) )!!}</span>
                                --}}{{--<span class="count-label"></span>--}}{{--
                            </a>

                        </li>

                        <li class="dropdown">

                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                --}}{{--<i class="icon-notifications_none"></i>--}}{{--
                                <b style="color: white">Balance</b>
                                <span style="color: #33ff27;">${!! number_format(Helper::balance(Helper::get_user()->id) )!!}</span>
                                --}}{{--<span class="count-label"></span>--}}{{--
                            </a>

                        </li>--}}




                        <li class="dropdown hidden-xs">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <img class="avatar" src="/images/users/{!! Helper::get_user()->avatar !!}" alt="User Thumb">
                                <i class="icon-chevron-small-down"></i>
                            </a>
                            <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">

                                <div class="logout-btn">
                                    <a href="/logouts" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </li>

                        <style>
                            .goog-te-gadget-icon{
                                display: none;
                            }
                            /* .goog-te-gadget-simple .goog-te-menu-value {
                                 color: #000;
                                 display: none;
                             }

                             .goog-te-gadget-simple:after .goog-te-menu-value:after {
                                 color: #000;
                                 display: none;
                                 content: 'your father'
                             }
*/

                        </style>
                        <li>
                            <div id="google_translate_element"></div><script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,fr,pt,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                           </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
            <!-- BEGIN .side-content  -->
            <div class="side-content ">
                <!-- BEGIN .user-profile -->
                <div class="user-profile">
                    <img class="profile-thumb" src="/images/users/{!! Helper::get_user()->avatar !!}" alt="User Thumb">
                    <h6 class="profile-name">{!! Helper::username() !!}</h6>
                </div>
                <!-- END .user-profile -->
                <!-- BEGIN .side-nav -->
                <nav class="side-nav">
                    <!-- BEGIN: side-nav-content -->
                    <ul class="unifyMenu" id="unifyMenu">



                        <li>
                            <a href="/account">
										<span class="has-icon">
											<i class="icon-home"></i>
										</span>
                                <span class="nav-title">Dashboard</span>
                            </a>
                        </li>



                        <li>
                            <a href="/users/{!! Helper::get_user()->id !!}/edit">
										<span class="has-icon">
											<i class="icon-user"></i>
										</span>
                                <span class="nav-title">Profile</span>
                            </a>
                        </li>


                        <li>
                            <a href="/deposit">
										<span class="has-icon">
											<i class="icon-arrow-down-thick"></i>
										</span>
                                <span class="nav-title">Deposit</span>
                            </a>
                        </li>


                        <li>
                            <a href="/withdraw">
										<span class="has-icon">
											<i class="icon-arrow-up-thick"></i>
										</span>
                                <span class="nav-title">Withdrawals</span>
                            </a>
                        </li>

                        <li>
                            <a href="/convert">
										<span class="has-icon">
											<i class="icon-arrow-up-thick"></i>
										</span>
                                <span class="nav-title">Convert Currency</span>
                            </a>
                        </li>

                        <li>
                            <a href="/logouts">
										<span class="has-icon">
											<i class="icon-exit_to_app"></i>
										</span>
                                <span class="nav-title">Sign Out</span>
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


        <div class="app-main">

            <div class="row gutters hidden-xs">
                <div class="col">
                    <div class="card" style="background-color:#e6ecf3 !important;">
                        <div class="card-body">
                            <div class="stats-widget">

                                <a href="/deposit">
                                    <div class="stats-widget-header">
                                        <i class="icon-coin-dollar"></i>
                                    </div>
                                </a>
                                <div class="stats-widget-body">
                                    <!-- Row start -->
                                    <ul class="row no-gutters">
                                        <li style="text-align: center">

                                            <h5 style="color: #00c0ef">${!! number_format(Helper::accountBalance()) !!}</h5>
                                            <p style="color: #00c0ef">Total Balance</p>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background:#e6ecf3 !important;">
                        <div class="card-body">
                            <div class="stats-widget">
                                <a href="/withdraw"><div class="stats-widget-header">
                                    <i class="icon-arrow-down-thick"></i>
                                    </div></a>
                                <div class="stats-widget-body">
                                    <!-- Row start -->
                                    <ul class="row no-gutters">
                                        <li style="text-align: center">
                                            <h5 style="color:#00a65a;">${!! number_format(Helper::get_user()->deposit_balance)  !!}</h5>
                                            <p style="color:#00a65a;">Active Deposits</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background:#e6ecf3 !important;">
                        <div class="card-body">
                            <div class="stats-widget">
                                <a href="/convert"><div class="stats-widget-header">
                                        <i class="icon-chart-bar"></i>
                                    </div>
                                </a>
                                <div class="stats-widget-body">
                                    <ul>
                                        <li style="text-align: center">
                                            <h5 style="color: #f39c12">${!! number_format(Helper::get_user()->profit_balance)  !!}</h5>
                                            <p style="color: #f39c12">Profit Balance</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background:#e6ecf3 !important;">
                        <div class="card-body">
                            <div class="stats-widget">
                                <a href="#"><div class="stats-widget-header">
                                    <i class="icon-arrow-down-thick"></i>
                                    </div>
                                </a>
                                <div class="stats-widget-body">
                                    <!-- Row start -->
                                    <ul>
                                        <li style="text-align: center">
                                            <h5 style="color: #dd4b39">${!! number_format(Helper::activeWithdrawals()) !!}</h5>
                                            <p style="color: #dd4b39">Total Withdrawal</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background:#e6ecf3 !important;">
                        <div class="card-body">
                            <div class="stats-widget">
                                <a href="/investment"><div class="stats-widget-header">
                                    <i class="icon-briefcase3"></i>
                                    </div>
                                </a>
                                <div class="stats-widget-body">
                                    <!-- Row start -->
                                    <ul>
                                        <li style="text-align: center">
                                            <h5 style="color: #00c0ef">${!! number_format(Helper::commissionBalance()) !!}</h5>
                                            <p style="color: #00c0ef">Avail. Commissions</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div style="margin-left: 25px">
                Ref Link:<a style="color:#8796af; font-weight: bolder; fonfont-size: 94%" href="{{ url("/register/")}}/{!! Helper::get_user()->ref_id !!} ">
                    {{config('app.url')}}register/{!! Helper::get_user()->ref_id !!}
                </a>
            </div>--}}




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



<script src="{{ asset('admin/content-filter/mixitup.min.js')}}"></script>
<script src="{{ asset('admin/content-filter/main.js')}}"></script>


<script src="{{ asset('admin/js/vue.js')}}"></script>
<script src="{{ asset('admin/js/common.js')}}"></script>

</body>
</html>
