@extends('profile')
@section('title', 'Home | ERCC')
@section('content')




        <div class="main-content" style="font-size: 13px">


            <div class="visible-xs">
                <div class="row gutters">



                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                        <a href="#" class="block-140" style="background: #00c0ef !important">
                            <div class="icon violet">
                                <i class="icon-coin-dollar"></i>
                            </div>
                            <h5 style="color: white">${!! number_format(Helper::accountBalance()) !!}</h5>
                            <p style="color: white">Total Balance</p>
                        </a>

                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                        <a href="#" class="block-140" style="background:#00a65a !important">
                            <div class="icon violet">
                                <i class="icon-arrow-up-thick"></i>
                            </div>
                            <h5 style="color: white">${!! number_format(Helper::get_user()->deposit_balance)  !!}</h5>
                            <p style="color: white">Active Deposits</p>
                        </a>

                    </div>

                </div>


                <div class="row gutters">



                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                        <a href="#" class="block-140" style="background: #f39c12 !important">
                            <div class="icon violet">
                                <i class="icon-chart-bar"></i>
                            </div>
                            <h5 style="color: white">${!! number_format(Helper::get_user()->profit_balance)  !!}</h5>
                            <p style="color: white">Profit Balance</p>
                        </a>

                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                        <a href="#" class="block-140" style="background:#dd4b39 !important;">
                            <div class="icon violet">
                                <i class="icon-coin-dollar"></i>
                            </div>
                            <h5 style="color: white">${!! number_format(Helper::activeWithdrawals()) !!}</h5>
                            <p style="color: white">Total Withdrawal</p>
                        </a>

                    </div>

                </div>

                <div class="row gutters">



                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col"  >
                        <a href="#" class="block-140" style="background:#00c0ef !important">
                            <div class="icon violet">
                                <i class="icon-coin-dollar"></i>
                            </div>
                            <h5 style="color: white">${!! number_format(Helper::commissionBalance()) !!}</h5>
                            <p style="color: white">Avail. Commissions</p>
                        </a>

                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >


                    </div>

                </div>
            </div>




            <div id="apps">
                <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="card">
                        <div class="user-profile" style="text-align: center">
                            <img class="profile-thumb" src="/images/users/{!! Helper::get_user()->avatar !!}" alt="User Thumb">
                            <h6 class="profile-name">{!! Helper::get_user()->first_name !!}</h6>
                        </div>
                        <div class="card-header"></div>
                        <div style="padding: 10px">

                            <p><b>Email</b> <br>{!! Helper::get_user()->email !!}</p>
                            <hr>
                            <p>
                                <b>Referal Link </b> <br> <a style="color:#8796af; font-weight: bolder; fonfont-size: 94%" href="{{ url("/register/")}}/{!! Helper::get_user()->ref_id !!} ">
                                    {{config('app.url')}}register/{!! Helper::get_user()->ref_id !!}
                                </a>
                            </p>
                            <hr>
                            <p>
                                <b>Country </b> <br> {!! Helper::get_user()->country !!}
                            </p>
                            <hr>
                            <p>
                                <b>Phone </b> <br> {!! Helper::get_user()->phone !!}
                            </p>
                            <hr>
                            <a class="btn btn-danger form-control form-control-lg" href="/logouts"> Sign Out</a>

                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">



                    <div class="card">
                        <div class="card-body">


                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Deposit Fund</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Deposit History</a>
                                </li>

                            </ul>


                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">
                                    {!! Form::open(array('route' => 'deposit.post', 'files' => true)) !!}

                                    <div class="card">
                                        <div class="card-header">Fund Your Account </div>
                                        <div class="card-body">
                                            <div class="form-inline">



                                                <select id="comboBox" v-on:change="setCategoryId" class='form-control' name="user_category" style="width: 45%; margin-right:10px">
                                                    <option selected >Amount To Deposit (Based on Daily R.O.I)</option>
                                                    @foreach($user_category as $category)
                                                        <option value={{$category->amount}}
                                                                {{-- @click="amount({{$category->amount}})"--}}>
                                                            {{$category->name}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <input v-model="theValue" readonly name="amount" type="text" class='form-control' style="width: 45%;">

                                                <br>
                                                <br>




                                            </div>
                                            <br>
                                            <select name="payment_type" class='form-control' style="width: 45%; margin-right:10px">
                                                <option  value="#">Payment Method (How you intend to make payment)</option>
                                                @foreach($payments as $payment)
                                                    <option value="{{$payment->id}}">{{$payment->name}}</option>
                                                @endforeach
                                            </select>

                                            <br>
                                            <br>
                                            <div style="width: 45%; margin-right:10px">
                                                <button type="submit" class="btn btn-primary "> Deposit Fund</button>
                                            </div>

                                        </div>
                                    </div>

                                    {!! Form::close() !!}

                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>INVESTMENT PACKAGE</th>
                                            <th>AMOUNT</th>
                                            <th>DAILY ROI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x = 1; ?>
                                        @foreach($user_category as $category)

                                            <tr>
                                                <th scope="row">{{$x++}}</th>
                                                <td>{{$category->acronym}} </td>
                                                <td>${{number_format($category->amount)}} </td>
                                                <td>{{$category->rate}}% </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>






                                </div>

                                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-header">Your Deposits History </div>
                                            <div class="card-body">
                                                <table class="table table-bordered table-responsive">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Reference ID</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Payment Method</th>
                                                        <th>Date Deposited</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $x = 1; ?>
                                                    @foreach($deposits as $deposit)
                                                        <?php $status = $deposit->status ?>
                                                        <tr>
                                                            <th scope="row">{{$x++}}</th>
                                                            <td>#{{$deposit->refId}} </td>
                                                            <td>${{$deposit->amount}} </td>
                                                            <td>

                                                                @if($status == 0)
                                                                    <div style="color: red">Pending...</div>
                                                                @else
                                                                    <div style="color: green">Success</div>
                                                                @endif

                                                            </td>
                                                            <td> {!! Helper::paymetMethod($deposit->payment_method_id) !!} </td>
                                                            <td> {{$deposit->created_at}}  </td>
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a class="fx-widget" data-widget="crypto-market-overview" data-lang="en" data-crypto-type="coins" data-coins="btc-usd,eth-usd,xrp-usd,bch-usd,ltc-usd,ada-usd,xem-usd,eos-usd,xlm-usd,neo-usd" data-pairs="btc-usd,eth-usd,bch-usd,iot-usd,ltc-usd,xrp-usd,dash-usd" data-primary-text-color="#333333" data-secondary-text-color="#999999" data-border-color="#d8d8d8" data-background-color="#ffffff" data-header-background-color="#eeeeee" data-header-text-color="#333333" data-width="100%" data-height="560" data-chart data-full-view data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;">
                        </a>
                        <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js" ></script>

                    </div>
                </div>

            </div>
            </div>


    </div>


        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script>

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

                created() {
                    /*let e = document.getElementsByClassName("serviceType");
                    //e.options[e.selectedIndex].value = "T"; // does not work
                    e.value="X";*/
                }
            })

        </script>
@endsection