@extends('welcome')
@section('title', 'Home | ERCC')
@section('content')


<div id="apps">
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
                                <p>My family and me want to thank you for helping us
                                    find a great opportunity to make money online. Very happy with how things are going!</p>
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
                        <h6 class="title-head hidden-xs">Reset<span> Password</span></h6>

                    </div>


                    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />


                        <div class="form-group">
                            @if(count($errors) > 0 )
                                <div class="alert ct-alert-1 style-03">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ti-close"></i>
                                    </button>
                                    <div class="alert-content" style="color: #f2ecec;text-align: center;background-color: #942828;padding-bottom: 12px;">
                                        <ul style="list-style: none">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
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
                            <input class="form-control" v-model="password" id="email" placeholder=" YOUR NEW PASSWORD" name="password" type="password">
                            <br>
                            <input class="form-control" v-model="repeat_password" id="email" placeholder=" CONFIRM NEW PASSWORD" name="repeat_password" type="password">
                    </div>



                    <div class="form-group">

                        <p class="action-btn">
                            <button type="submit" class="btn btn-primary"
                                    :disabled="password === '' || repeat_password === '' || password !== repeat_password  ">Register</button>
                        </p>



                    </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>



        let app = new Vue({
            el: '#apps',
            data: {
                password: '',
                repeat_password: '',
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