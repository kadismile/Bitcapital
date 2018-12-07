<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bitech Capital Group</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/orange.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

        <link href="{{ asset('css/styleswitcher.css') }}" rel="stylesheet">


        <script src="{{ asset('js/modernizr.js') }}"></script>
    </head>
    <body>
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
        </div>
    </div>


    <div id="showSwitcher" class="styleSecondColor" style="margin-left: 0px; display: block; width: 103px">
        <a href=" https://wa.me/441133201986?text=We%20are%20Bitech%20Capital%2C%20how%20can%20we%20help%20you%20today%20%3F" target="_blank" style="padding-top: 0px;padding-bottom: 0px;">
            <img src="/images/icons/whatsapp.png" alt="whatsapp" style="width: 100%;">
        </a>
    </div>


    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="/">
                            <img id="logo" class="img-responsive" src="/images/logo-dark.png" alt="logo">
                        </a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>9,450 USD</h6><span>ETH</span></li>
                            <li>
                                <h6>+5.26%</h6><span>DASH</span></li>
                            <li>
                                <h6>12.820 BTC</h6><span>XRP</span></li>
                            <li>
                                <h6>2,231,775</h6><span>XLM</span></li>
                            <li>

                            <li>
                                <h6>2,231,775</h6><span>BTC</span></li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                        @if (Sentinel::check())
                                <li class="sign-up"><a href="/account" class="btn btn-primary"><i class="fa fa-user-plus"></i> Profile</a></li>
                                <li class="sign-in"><a href="/logouts" class="btn btn-primary"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                            @else
                                <li class="sign-in"><a href="/login" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                                <li class="sign-up"><a href="/register" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                        @endif
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="/">
                            <img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="">
                        </a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <!-- Main Menu Starts -->
                            <ul class="nav navbar-nav">
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' ? ' active' : '');?>"><a href="/" class="dropdown-toggle">Home</a></li>
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/who-we-are' ? ' active' : '');?>"><a href="/who-we-are" class="dropdown-toggle">WHO WE ARE</a></li>
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/packages' ? ' active' : '');?>"><a href="/packages" class="dropdown-toggle">Our Packages</a></li>
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/faqs' ? ' active' : '');?>"><a href="/faqs" class="dropdown-toggle">FAQs</a></li>


                                @if(Sentinel::check())
                                    <li><a href="/account" class="slider btn btn-primary ">Profile</a></li>
                                @else
                                    <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/login' ? ' active' : '');?>"><a href="/login" class="dropdown-toggle">ACCOUNT LOGIN</a></li>
                                @endif
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/register' ? ' active' : '');?>"><a href="/register" class="dropdown-toggle">SIGN UP</a></li>
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php/contact-us' ? ' active' : '');?>"><a href="/contact-us" class="dropdown-toggle">CONTACT US</a></li>
                                <li class="dropdown pull-right">


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
                                    <div id="google_translate_element"></div><script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,fr,pt,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                        }
                                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 17px 25px;">
                                        <img src="images/icons/language/british.jpg" style="width: 25%" alt=""> <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><img src="images/icons/language/espanol.jpg" style="width: 30%" alt=""></a></li>
                                        <li><a href="#"><img src="images/icons/language/chinees.jpg" style="width: 30%" alt=""></a></li>
                                        <li><a href="#"><img src="images/icons/language/portuguese.jpg" style="width: 30%" alt=""></a></li>
                                        <li><a href="#"><img src="images/icons/language/italy.jpg" style="width: 30%" alt=""></a></li>
                                    </ul>--}}
                                </li>
                            </ul>

                            <!-- Main Menu Ends -->
                        </div>
                    </div>
                </div>
                <!-- Search Input Starts -->
                <div class="site-search">
                    <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                    </div>
                </div>
                <!-- Search Input Ends -->
            </nav>
            <!-- Navigation Menu Ends -->
        </header>


                @yield('content')


    {{-- <div id="app"></div>

     <script src="{{ asset('js/app.js') }}"></script>--}}




    <!-- Footer Starts -->
        <footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-4">
                            <h4>Our Company</h4>
                            <div class="menu">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/who-we-are">WHO WE ARE</a></li>
                                    <li><a href="/faqs">FAQs</a></li>
                                    <li><a href="/login">ACCOUNT LOGIN</a></li>
                                    <li><a href="/register">SIGN UP</a></li>
                                    <li><a href="/contact-us">CONTACT US</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->

                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-4">
                            <div class="contacts">
                                <div>
                                    <h4>Head Office</h4>
                                    <p>Lion House, 41, York Place, Leeds, LS1 2ED U.K</p>
                                    <p> <b>Phone:</b> +44-113-320-1986</p>
                                </div>
                                <div>
                                    <h4>Branch Office</h4>
                                    <p>Address:  689  James Street, Rochester, New York 14604.  U.S.A </p>
                                    <p> <b>Phone:</b> +1 (585)-484-1139 </p>
                                </div>
                                <div>
                                    <span><b>mail: enquiries@bitechcapital.com</b></span>
                                </div>
                            </div>
                            <!-- Social Media Profiles Starts -->
                            {{--<div class="social-footer">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>--}}
                            <!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-4">
                            <!-- Facts Starts -->
                            <div class="facts-footer">
                                <div>
                                    <h5>$198.76M</h5>
                                    <span>Market cap</span>
                                </div>
                                <div>
                                    <h5>243K</h5>
                                    <span>daily transactions</span>
                                </div>
                                <div>
                                    <h5>1,500</h5>
                                    <span>active accounts</span>
                                </div>
                                <div>
                                    <h5>127</h5>
                                    <span>supported countries</span>
                                </div>
                            </div>
                            <!-- Facts Ends -->
                            <hr>
                            <!-- Supported Payment Cards Logo Starts -->
                            <div class="payment-logos">
                                <h4 class="payment-title">supported payment methods</h4>

                                <img src="/images/icons/payment/skrill.jpg" alt="skrill">
                                <img src="/images/icons/payment/mastercard.png" alt="mastercard">
                                <img src="/images/icons/payment/visa.png" alt="visa">
                                <img src="/images/icons/payment/paypal.png" alt="paypal">
                                <img src="/images/icons/payment/perfect-money.JPG" alt="perfect money">

                            </div>
                            <!-- Supported Payment Cards Logo Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                    </div>
                </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2018 Bitech Capital Group All Rights Reserved</p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area Ends -->
        </footer>
        <!-- Footer Ends -->
        <!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        <!-- Back To Top Ends  -->

        <!-- Template JS Files -->
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>


    </div>
    <!-- Wrapper Ends -->
    </body>
</html>
