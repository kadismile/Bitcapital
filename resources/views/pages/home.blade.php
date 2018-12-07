@extends('welcome')
@section('title', 'Home | ERCC')
@section('content')


    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner">

            <div class="item  active bg-parallax item-2">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                {{--<h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>--}}
                                <p style="font-size: 30px">THE FUTURE OF DIGITAL CURRENCIES</p>
                                <h3 class="slide-title"> <span>INVESTMENT</span> IS HERE!</h3>
                                <p style="font-size: 20px">Investing in cryptocurrencies is the way to the future, join millions of investors that are benefiting from the blockchain technology worldwide!</p>
                                <p>

                                    @if(Sentinel::check())
                                        <a href="/account" class="slider btn btn-primary ">Profile</a>
                                    @else
                                        <a href="/packages"  class="slider btn btn-primary ">get started now</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="left carousel-control" href="index.html#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="index.html#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>

    </div>

    <br>
    <br>
    <br>

    <section class="features">
        <div class="container">

            <div class="row features-row">




                <div class="feature-box col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png" alt="download bitcoin"/>
                            </span>
                    <div class="feature-box-content">
                        <h3>Earn Like a Pro</h3>
                        <p>Designed for both beginners and advanced investors</p>
                    </div>
                </div>

                <div class="feature-box two col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins"/>
                            </span>
                    <div class="feature-box-content">
                        <h3>Data Security</h3>
                        <p>Full data encryption and anti-DDoS protection</p>
                    </div>
                </div>

                <div class="feature-box three col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins"/>
                            </span>
                    <div class="feature-box-content">
                        <h3>Portfolios</h3>
                        <p>Strategies are executed using single or multiple portfolios to model real market conditions.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="image-block">
        <div class="container-fluid">



            <div class="row">

                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>

                    <h3 class="title-head text-center">WHY CHOOSE <span>Bitech capital</span></h3>
                    <div class="title-head-subtitle text-center">
                        <p>reasons we are still the best</p>
                    </div>
                    <div class="row">

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="strong-security" src="images/icons/orange/strong-security.png" alt="strong security"/>
									</span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br/>full data encryption</p>
                            </div>
                        </div>

                        <div class="gap-20-mobile"></div>

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="world-coverage" src="images/icons/orange/world-coverage.png" alt="world coverage"/>
									</span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br/> around all the globe</p>
                            </div>
                        </div>
                        <div class="gap-20-mobile"></div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="payment-options" src="images/icons/orange/payment-options.png" alt="payment options"/>
									</span>
                                <h3 class="feature-title">Payment Options</h3>
                                <p>Popular methods: Visa, MasterCard, <br/>bank transfer, cryptocurrency</p>
                            </div>
                        </div>

                    </div>
                    <div class="gap-20"></div>
                    {{--<div class="row">



                        <div class="gap-20-mobile"></div>

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="mobile-app" src="images/icons/orange/mobile-app.png" alt="mobile app"/>
									</span>
                                <h3 class="feature-title">Mobile App</h3>
                                <p>Trading via our Mobile App, Available<br/> in Play Store & App Store</p>
                            </div>
                        </div>

                    </div>--}}
                    <div class="gap-20"></div>
                    <div class="row">

                       {{-- <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="cost-efficiency" src="images/icons/orange/cost-efficiency.png" alt="cost efficiency"/>
									</span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                <p>Reasonable trading fees for takers<br/> and all market makers</p>
                            </div>
                        </div>



                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="high-liquidity" src="images/icons/orange/high-liquidity.png" alt="high liquidity"/>
									</span>
                                <h3 class="feature-title">High Liquidity</h3>
                                <p>Fast access to high liquidity orderbook<br/> for top currency pairs</p>
                            </div>
                        </div>--}}

                    </div>
                </div>

                <div class="col-md-4 ts-padding bg-image-1">
                    <div>
                        <div class="text-center">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>a commercial website that lists wallets, exchanges and other bitcoin related info</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WE ARE Bitech Capital Group</h3>
                    <p class="about-text">Bitech Capital Group is a private, lawfully registered online investment
                        firm with the goal of earning the best profit potential from Crypto-currency market.
                        We provide a wide range of investment services to a substantial and diversified
                        client base that includes corporations, financial institutions, governments and
                        high-net-worth individuals. We seek to deliver to our clients leading market
                        insight, risk management and execution, helping them to raise money, invest,
                        and transfer risk across financial asset classes.
                    </p>

                    <a class="btn btn-primary" href="/who-we-are">Read More</a>
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>






    <div id="apps">
        <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->

            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">

                <a class="fx-widget" data-widget="crypto-market-overview" data-lang="en" data-crypto-type="coins" data-coins="btc-usd,eth-usd,xrp-usd,bch-usd,ltc-usd,ada-usd,xem-usd,eos-usd,xlm-usd,neo-usd" data-pairs="btc-usd,eth-usd,bch-usd,iot-usd,ltc-usd,xrp-usd,dash-usd" data-primary-text-color="#333333" data-secondary-text-color="#999999" data-border-color="#d8d8d8" data-background-color="#ffffff" data-header-background-color="#eeeeee" data-header-text-color="#333333" data-width="100%" data-height="560" data-chart data-full-view data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;">
                </a>
                <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js" ></script>
            </div>

            <script>$(".mainHeader").hide()</script>
            <!-- Section Content Ends -->
        </div>
    </section>
    </div>

    <section class="pricing">
        <div class="container">

            <div class="row text-center">
                <h2 class="title-head">Our <span>packages</span></h2>
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

    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="action-text">
                            <h2>Get Started Today With Bitcoin</h2>
                            <p class="lead">Open account and start Earning!</p>
                        </div>

                        <p class="action-btn"><a class="btn btn-primary" href="/register">Register Now</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>

        document.getElementsByClassName("mainHeader").style.visibility = "hidden";
        function doSomething(id) {
            alert(id);
            let Id = id;
            let  input = document.getElementById("input_id").value;
            input = Id
        }

        let app = new Vue({
            el: '#apps',
            data: {
                message: 'Hello Vue!',
                selectedDay: 4,
                theValue: '',
            },
            methods: {
                amount: function (id){
                    this.theValue = "$"+id.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                },

                setCategoryId: function (e) {
                    this.amount(e.target.value)
                }
            },

           /* created: function () {
                alert('your'e mad ...');
            }*/


        })

    </script>
@endsection