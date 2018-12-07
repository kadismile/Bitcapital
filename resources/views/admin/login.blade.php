<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/unify-admin/design-12/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Jul 2018 17:39:56 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Unify Admin Panel" />
    <meta name="keywords" content="Login, Unify Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="admin/img/favicon.ico" />
    <title>Unify Admin Dashboard - Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Common CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/fonts/icomoon/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet">


</head>

<body class="login-bg">

<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            {!! Form::open(array('route' => 'admin.post.login', 'files' => true,)) !!}
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="#" class="login-logo">
                                    Login
                                </a>
                                <div class="input-group">
                                    <span class="input-group-addon" id="username"><i class="icon-account_circle"></i></span>
                                    {{ Form::text('email', null,
                                     ["class" => 'form-control',
                                    'id'=>"email",
                                    "placeholder"=>"EMAIL"])
                                 }}

                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    {{ Form::password('password',
                                        ["class" => 'form-control',
                                        'id'=>"password",
                                        "placeholder"=>"ENTER PASSWORD"])
                                    }}
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <div class="login-slider"></div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<footer class="main-footer no-bdr fixed-btm">
    <div class="container">
        Copyright Unify Admin 2017.
    </div>
</footer>
</body>

<!-- Mirrored from bootstrap.gallery/unify-admin/design-12/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Jul 2018 17:39:57 GMT -->
</html>