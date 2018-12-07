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
                        <h6 class="title-head hidden-xs">Forgot<span> Password</span></h6>

                    </div>


                    {!! Form::open(array('route' => 'password.forget', 'files' => true,)) !!}

                    <div class="form-group">
                        @if(session('error'))
                            <div class="alert ct-alert-1 style-03">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ti-close"></i>
                                </button>
                                <div class="alert-content" style="color: #f2ecec;text-align: center;background-color: #942828;padding-bottom: 12px;">
                                    {{session('error')}}
                                </div>
                            </div>

                        @endif
                        @if(session('success'))
                            <div class="alert ct-alert-1 style-02">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ti-close"></i>
                                </button>
                                <div class="alert-content" style="background-color: green;padding: 14px;text-align: center;color: white;">
                                    {{session('success')}}
                                </div>
                            </div>
                        @endif
                        {{ Form::text('email', null,
                                 ["class" => 'form-control',
                                'id'=>"email",
                                "placeholder"=>" EMAIL"])
                             }}
                    </div>



                    <div class="form-group">

                        <p class="action-btn">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </p>

                        <p class="text-center">don't have an account ? <a href="/register">register now</a></p>

                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>


    <script>

        function formSubmitted(e){
            let url = 'http://localhost:8000';
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            let form = new FormData();
            form.append("email", email);
            form.append("password", password);

            let settings = {
                "async": true,
                "crossDomain": true,
                "url": `${url}/api/login`,
                "method": "POST",
                "headers": {
                    "cache-control": "no-cache",
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            };

            axios(settings).then((response) => {
                if(response.status === 200){
                    window.location = `${url}/sprofile`;
                }
            }).catch((error) => {
                console.log(error);
            });


            document.getElementById('email').value = "";
            document.getElementById('password').value = "";


        }
    </script>


@endsection