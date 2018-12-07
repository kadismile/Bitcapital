@extends('welcome')
@section('title', 'Home | ERCC')
@section('content')



    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">



            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="item active item-1">
                        <div>
                            <blockquote>
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item item-3">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                                <footer><span>Rawia Chniti</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

            <div class="form-container">
                <div>

                    <div class="row text-center">
                        <h2 class="title-head hidden-xs"> FUND <span> ACCOUNT </span></h2>

                    </div>


                    {!! Form::open(array('route' => 'post.login', 'files' => true,)) !!}
                    <div class="form-group">
                        <div class="col-md-12">
                            {{
                               Form::select('sex',
                               array(
                               'BTC' => 'Btc',
                               'PayPal' => 'PayPal',
                               'Skrill' => 'Skrill',
                               'Perfect Money' => 'Perfect Money',
                               'Money Gram' => 'Money Gram',
                               'Western Union' => 'Western Union',
                               'Wire Transfer' => 'Wire Transfer',
                               'Bank Deposit' => 'Bank Deposit',
                               ),
                               NULL, array('class' => 'form-control',
                               'placeholder' => '--Payment method--',
                               'id'=> 'gender'))

                            }}

                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-12">
                        {{ Form::number('email', null,
                                 ["class" => 'form-control',
                                'id'=>"email",
                                "placeholder"=>"AMOUNT"])
                             }}
                        </div>
                    </div>



                    <div class="form-group">

                        <p class="action-btn">
                            <button type="submit" class="btn btn-primary">FUND</button>
                        </p>



                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>





@endsection