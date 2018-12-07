@extends('welcome')
@section('title', 'Packages')
@section('content')

<div class="wrapper">

   {{-- <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head">Our <span>packages</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="/"> home</a></li>
                                <li>packages</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>--}}



    <section class="pricing">
        <div class="container">

            <div class="row text-center">
                <h2 class="title-head">Choose <span> a packages</span></h2>
                <div class="title-head-subtitle">
                    <p>Purchase Bitcoin using a credit card </p>
                </div>
            </div>

            <div class="row pricing-tables-content">
                <div class="pricing-container">


                    <div id="register"></div>
                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$500</h3>
                                        <hr>

                                        <h3 class="feature-title">BASIC</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 3% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$2,000</h3>
                                        <hr>

                                        <h3 class="feature-title">STANDARD</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 5% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$5,000</h3>
                                        <hr>

                                        <h3 class="feature-title">ADVANCE</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 7% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>

                    </ul>

                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$10,000</h3>
                                        <hr>

                                        <h3 class="feature-title">Ultimate</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 8.8% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$15,000</h3>
                                        <hr>

                                        <h3 class="feature-title">PREMIUM</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 10% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">

                                <li data-type="buy" class="is-visible" style="border-radius: 25px;">
                                    <header class="pricing-header">

                                        <h3 class="feature-title" style="color: #fd961a">$25,000</h3>
                                        <hr>

                                        <h3 class="feature-title">Gold</h3>
                                        <hr>

                                        <h2 ><span></span></h2>



                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Daily Returns</b> 15.15% </p>

                                        <p style="color:#fd961a"><i class="fa fa-check"></i> <b>Instant Payout</b></p>

                                        <p style="color:#fd961a"> <i class="fa fa-check"></i>Insurance:100%</p>



                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="/register" class="btn btn-primary"> Register</a>
                                    </footer>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection