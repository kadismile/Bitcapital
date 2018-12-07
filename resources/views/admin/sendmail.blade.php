@extends('admin')
@section('title', 'Home | ERCC')
@section('content')


    <!-- BEGIN .app-main -->
    <div class="app-main">
        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="page-icon">
                            <i class="icon-laptop_windows"></i>
                        </div>
                        <div class="page-title">
                            <h5>Dashboard</h5>
                            <h6 class="sub-heading">Welcome to Unify Admin Template</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="right-actions">

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END: .main-heading -->
        <!-- BEGIN .main-content -->
        <div class="main-content">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">Send Email </div>
                        <div class="card-body">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>



                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                                {!! Form::open(array('route' => 'send-mail')) !!}
                                    <div class="form-group">

                                        <input type="text"  class="form-control" name="subject" id="exOne" placeholder="Subject">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="exOne" placeholder="name@example.com">
                                    </div>


                                    <div class="form-group m-0">
                                        <textarea class="form-control" id="myTextarea"  name="message"  rows="5"></textarea>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                {!! Form::close() !!}

                            </div>


                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: .main-content -->
    </div>
    <!-- END: .app-main -->



    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=uw3nlwdcokq197comk3nnzifmzfyqgl34plszvhz03gizd6n"></script>
    {{--<script src="{{ asset('js/tinymce.js')}}"></script>--}}
    <script>
        tinymce.init({
            selector: '#myTextarea',
            height: 200,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
    </script>

@endsection