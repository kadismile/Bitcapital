@extends('profile')
@section('title', 'Home | ERCC')
@section('content')


    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-beaker"></i>
                    </div>
                    <div class="page-title">
                        <h5>Currency Conversion </h5>
                        <h6 class="sub-heading">Convert Currency</h6>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

                </div>
            </div>
        </div>
    </header>
    <!-- BEGIN .main-content -->
    <div class="main-content">

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a class="fx-widget" data-widget="currency-converter" data-widget-title-color="#333333" data-widget-background-color="#eeeeee" data-input-fill="#ffffff" data-input-border-color="#d8d8d8" data-input-text-color="#333333" data-widget-text-color="#333333" data-dropdown-text-color="#999999" data-format="fullwidth" data-lang="en" data-width="500" data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;">

                        </a>
                        <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js" > </script>



                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection