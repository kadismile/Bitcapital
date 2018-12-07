@extends('profile')
@section('title', 'Home | BitCapital')
@section('content')


    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-beaker"></i>
                    </div>
                    <div class="page-title">
                        <h5>Withdraw Funds </h5>
                        <h6 class="sub-heading">withdraw from your account</h6>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

                </div>
            </div>
        </div>
    </header>
    <!-- BEGIN .main-content -->
    <div class="main-content">



        <div id="apps">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Withdraw Fund</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Withdraw History</a>
                                </li>

                            </ul>


                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">

                                    {!! Form::open(array('route' => 'withdraw.post', 'files' => true)) !!}

                                    <div class="card">
                                        <div class="card-header">Withdraw </div>
                                        @if(Helper::profitBalance() == 0 && Helper::commissionBalance() == 0 && Helper::activeDeposits() == 0 )
                                            <br>

                                            <p style="text-align: center">No Avaiable funds for withdrawal</p>

                                            @else
                                            <div class="card-body">
                                                <p>@{{  withdraw_from }} @{{ amountWithdrawFrom }}</p>
                                                <div class="form-inline">

                                                    <input type="hidden" name="user_id"  value="{{Helper::get_user()->id}}">
                                                    <input type="hidden" v-model="withdraw_from" id="withdraw_from" name="withdraw_from"  value="">



                                                    <select id="comboBox" class='form-control' name="amountWithdrawFrom" style="width: 45%; margin-right:10px" @change="debitPoint">

                                                       {{-- @if(Helper::commissionBalance() != 0)
                                                            <option selected value="commission_balance"> Commission Balance: ${{number_format(Helper::commissionBalance())}}</option>
                                                        @else
                                                        @endif

                                                        @if(Helper::profitBalance() != 0)
                                                            <option selected value="profit_balance"> Profit Balance: ${{number_format(Helper::profitBalance())}}</option>
                                                        @else
                                                        @endif

                                                        @if(Helper::activeDeposits() != 0)
                                                            <option selected value="deposits"> Deposits: ${{number_format(Helper::activeDeposits())}}</option>
                                                        @else
                                                        @endif--}}


                                                        <option selected value="commission_balance"> Commission Balance: ${{number_format(Helper::commissionBalance())}}</option>
                                                        <option selected value="profit_balance"> Profit Balance: ${{number_format(Helper::profitBalance())}}</option>
                                                        <option selected value="deposits"> Deposits: ${{number_format(Helper::activeDeposits())}}</option>
                                                        <option selected value="">Wallet To Withdraw From</option>
                                                    </select>


                                                    <span class="currency">$</span>
                                                    <input @change="debitPoint" v-model="amountWithdrawn" id="txtNumber" value="" placeholder="Amount To Withdraw" onkeypress="return isNumberKey(event)" type="text" name="amount" class='form-control' style="width: 45%;">

                                                    <br>
                                                    <br>
                                                </div>
                                                <br>


                                                <br>
                                                <br>
                                                <div style="width: 45%; margin-right:10px">
                                                    <button type="submit" {{-- @click="formSubmit"--}}
                                                    class="btn btn-primary "> Withdraw Funds</button>
                                                </div>

                                            </div>
                                        @endif

                                    </div>

                                    {!! Form::close() !!}


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

                                                        <th>Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $x = 1; ?>
                                                    @foreach($withdrawals as $withdrawal)
                                                        <?php $status = $withdrawal->status ?>
                                                        <tr>
                                                            <th scope="row">{{$x++}}</th>
                                                            <td>#{{$withdrawal->refId}} </td>
                                                            <td>${{$withdrawal->amount}} </td>
                                                            <td>

                                                                @if($status == 0)
                                                                    <div style="color: red">Pending...</div>
                                                                @else
                                                                    <div style="color: green">Success</div>
                                                                @endif

                                                            </td>

                                                            <td> {{$withdrawal->created_at}}  </td>
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
                    </div>
                </div>
            </div>
        </div>

    </div>








    <script>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }


        function isNumericKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return true;
            return false;
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>


        let app = new Vue({
            el: '#apps',
            data: {

                name: 'salim',
                amountWithdrawFrom:'',
                amountWithdrawn:'',
                disable: "disable",
                theValue:'',
                withdraw_from: ''
            },
            methods: {
                amount: function (id){
                    this.withdraw_from = id;
                },

                formSubmit: function (event) {
                   alert(this. theValue + 'hmmm');
                    event.preventDefault()
                },
                numberWithCommas: function(x){
                    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                },

                debitPoint: function (e) {
                    this.amount(e.target.value)
                },

            },

            created() {
                /*let e = document.getElementsByClassName("serviceType").value;
                //e.options[e.selectedIndex].value = "T"; // does not work
                e.value="X";*/
            }
        })

    </script>



@endsection