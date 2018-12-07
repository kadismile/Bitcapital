@extends('welcome')
@section('title', 'Home | ERCC')
@section('content')


    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">


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
                                <footer><span>Dalel Boubaker</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">


            <div id="apps">
                <div class="form-container" >
                    <div>

                        <div class="row text-center">
                            <h2 class="title-head hidden-xs">get <span>started</span> </h2>
                            <p class="info-form">Open account and start trading Bitcoins now!  {{mt_rand(0, 10000)}}</p>

                            @{{ sex  }}  @{{ country  }}
                        </div>






                        {!! Form::open(array('route' => 'Refregistration.post', 'files' => true, 'style'=>"max-width: 800px" )) !!}

                        <div class="form-group">

                            @if(session('error'))
                                <div class="alert alert-danger ">
                                    {{session('error')}}
                                </div>
                            @endif
                            @if(count($errors) > 0)
                                <div class="alert alert-danger ">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success ">
                                    {{session('success')}}
                                </div>
                            @endif

                            <div class="col-md-12">
                                {{
                                    Form::select('usercategory_id',
                                    array(
                                    '1' => 'BASIC $500 AT 3% DAILY ROI',
                                    '2' => 'STANDARD $2000 AT 5% DAILY ROI',
                                    '3' => 'ADVANCE $5000  AT 7% DAILY ROI',
                                    '4' => 'PREMIUM $10,000 AT 8.8% DAILY ROI',
                                    '5' => 'ULTIMATE $15,000 AT 10.01% DAILY ROI',
                                    '6' => 'GOLD $20,000 AT 15.15% DAILY ROI',
                                    ),
                                    NULL, array('class' => 'form-control',
                                    'placeholder' => '--Select Package--',
                                    'id'=> 'usercategory',
                                    'v-model' => 'usercategory_id'))
                                }}

                            </div>
                        </div>
                        <br/>
                        <br/>
                        <input type="hidden" value="{{$ref_link}}" name="ref_id">
                        <input type="hidden" value="{{$refUser_id}}" name="refUserId">
                        <div class="form-group">
                            <div class="col-md-6">
                                {{ Form::text('first_name', null,
                                      ["class" => 'form-control',
                                     'id'=>"firstName",
                                     "placeholder"=>"FIRST NAME",
                                      'v-model' => 'first_name'])
                                  }}

                            </div>
                            <div class="col-md-6">
                                {{ Form::text('last_name', null,
                                      ["class" => 'form-control',
                                     'id'=>"firstName",
                                     "placeholder"=>"LAST NAME",
                                     'v-model' => 'last_name'])
                                  }}
                            </div>
                        </div>

                        <br/>
                        <div class="form-group">
                            <div class="col-md-6">

                                {{ Form::text('email', null,
                                     ["class" => 'form-control',
                                    'id'=>"email",
                                    "placeholder"=>"EMAIL",
                                     'v-model' => 'email'])
                                 }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::text('phone', null,
                                     ["class" => 'form-control',
                                    'id'=>"phone",
                                    "placeholder"=>"PHONE",
                                    'v-model' => 'phone'])
                                 }}
                            </div>


                        </div>
                        <br/>



                        <div class="form-group">
                            <div class="col-md-6">
                                {{
                                   Form::select('sex',
                                   array(
                                   'Male' => 'Male',
                                   'Female' => 'Female'),
                                   NULL, array('class' => 'form-control',
                                   'placeholder' => '--Select Sex--',
                                   'id'=> 'sex',
                                   'v-model' => 'sex'))

                                }}

                            </div>
                            <div class="col-md-6">
                                {{
                                  Form::select('country',
                                  array(
                                   'Afghanistan' => 'Afghanistan',
                                   'Aland Islands' => 'Aland Islands',
                                   'Albania' => 'Albania',
                                   'Algeria' => 'Algeria',
                                   'American Samoa' => 'American Samoa',
                                   'Andorra' => 'Andorra',
                                   'Angola' => 'Angola',
                                   'Anguilla' => 'Anguilla',
                                   'Antarctica' => 'Antarctica',
                                   'Antigua and Barbuda' => 'Antigua and Barbuda',
                                   'Argentina' => 'Argentina',
                                   'Armenia' => 'Armenia',
                                   'Aruba' => 'Aruba',
                                   'Ascension Island' => 'Ascension Island',
                                   'Australia' => 'Australia',
                                   'Austria' => 'Austria',
                                   'Azerbaijan' => 'Azerbaijan',
                                   'Bahamas' => 'Bahamas',
                                   'Bahrain' => 'Bahrain',
                                   'Bangladesh' => 'Bangladesh',
                                   'Barbados' => 'Barbados',
                                   'Belarus' => 'Belarus',
                                   'Belize' => 'Belize',
                                   'Benin' => 'Benin',
                                   'Bermuda' => 'Bermuda',
                                   'Bhutan' => 'Bhutan',
                                   'Bolivia' => 'Bolivia',
                                   'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                                   'Botswana' => 'Botswana',
                                   'Brazil' => 'Brazil',
                                   'British Indian Ocean Territory' => 'British Indian Ocean Territory',
                                   'British Virgin Islands' => 'British Virgin Islands',
                                   'Brunei' => 'Brunei',
                                   'Bulgaria' => 'Bulgaria',
                                   'Burkina Faso' => 'Burkina Faso',
                                   'Burundi' => 'Burundi',
                                   'Cambodia' => 'Cambodia',
                                   'Cameroon' => 'Cameroon',
                                   'Canada' => 'Canada',
                                   'Canary Islands' => 'Canary Islands',
                                   'Cape Verde' => 'Cape Verde',
                                   'Caribbean Netherlands' => 'Caribbean Netherlands',
                                   'Cayman Islands' => 'Cayman Islands',
                                   'Central African Republic' => 'Central African Republic',
                                   'Ceuta and Melilla' => 'Ceuta and Melilla',
                                   'Chad' => 'Chad',
                                   'Chile' => 'Chile',
                                   'China' => 'China',
                                   'Christmas Island' => 'Christmas Island',
                                   'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
                                   'Colombia' => 'Colombia',
                                   'Comoros' => 'Comoros',
                                   'Congo - Brazzaville' => 'Congo - Brazzaville',
                                   'Congo - Kinshasa' => 'Congo - Kinshasa',
                                   'Cook Islands' => 'Cook Islands',
                                   'Costa Rica' => 'Costa Rica',
                                   'Cote deIvoire' => 'Cote deIvoire',
                                   'Croatia' => 'Croatia',
                                   'Cuba' => 'Cuba',
                                   'Cura�ao' => 'Cura�ao',
                                   'Cyprus' => 'Cyprus',
                                   'Czech Republic' => 'Czech Republic',
                                   'Denmark' => 'Denmark',
                                   'Diego Garcia' => 'Diego Garcia',
                                   'Djibouti' => 'Djibouti',
                                   'Dominica' => 'Dominica',
                                   'Dominican Republic' => 'Dominican Republic',
                                   'Ecuador' => 'Ecuador',
                                   'Egypt' => 'Egypt',
                                   'Equatorial Guinea' => 'Equatorial Guinea',
                                   'El Salvador' => 'El Salvador',
                                   'Eritrea' => 'Eritrea',
                                   'Estonia' => 'Estonia',
                                   'Ethiopia' => 'Ethiopia',
                                   'Falkland Islands' => 'Falkland Islands',
                                   'Faroe Islands' => 'Faroe Islands',
                                   'Fiji' => 'Fiji',
                                   'France' => 'France',
                                   'Finland' => 'Finland',
                                   'French Guiana' => 'French Guiana',
                                   'French Polynesia' => 'French Polynesia',
                                   'French Southern Territories' => 'French Southern Territories',
                                   'Gabon' => 'Gabon',
                                   'Gambia' => 'Gambia',
                                   'Georgia' => 'Georgia',
                                   'Germany' => 'Germany',
                                   'Ghana' => 'Ghana',
                                   'Gibraltar' => 'Gibraltar',
                                   'Greece' => 'Greece',
                                   'Greenland' => 'Greenland',
                                   'Grenada' => 'Grenada',
                                   'Guadeloupe' => 'Guadeloupe',
                                   'Guam' => 'Guam',
                                   'Guatemala' => 'Guatemala',
                                   'Guernsey' => 'Guernsey',
                                   'Guinea' => 'Guinea',
                                   'Guinea-Bissau' => 'Guinea-Bissau',
                                   'Guyana' => 'Guyana',
                                   'Haiti' => 'Haiti',
                                   'Honduras' => 'Honduras',
                                   'Hong Kong SAR China' => 'Hong Kong SAR China',
                                   'Hungary' => 'Hungary',
                                   'Iceland' => 'Iceland',
                                   'India' => 'India',
                                   'Indonesia' => 'Indonesia',
                                   'Iran' => 'Iran',
                                   'Isle of Man' => 'Isle of Man',
                                   'Israel' => 'Israel',
                                   'Italy' => 'Italy',
                                   'Jamaica' => 'Jamaica',
                                   'Japan' => 'Japan',
                                   'Jersey' => 'Jersey',
                                   'Jordan' => 'Jordan',
                                   'Kazakhstan' => 'Kazakhstan',
                                   'Kenya' => 'Kenya',
                                   'Kiribati' => 'Kiribati',
                                   'Kosovo' => 'Kosovo',
                                   'Kuwait' => 'Kuwait',
                                   'Kyrgyzstan' => 'Kyrgyzstan',
                                   'Laos' => 'Laos',
                                   'Latvia' => 'Latvia',
                                   'Lebanon' => 'Lebanon',
                                   'Lesotho' => 'Lesotho',
                                   'Liberia' => 'Liberia',
                                   'Libya' => 'Libya',
                                   'Lithuania' => 'Lithuania',
                                   'Luxembourg' => 'Luxembourg',
                                   'Macau SAR China' => 'Macau SAR China',
                                   'Macedonia' => 'Macedonia',
                                   'Madagascar' => 'Madagascar',
                                   'Malawi' => 'Malawi',
                                   'Malaysia' => 'Malaysia',
                                   'Maldives' => 'Maldives',
                                   'Mali' => 'Mali',
                                   'Malta' => 'Malta',
                                   'Marshall Islands' => 'Marshall Islands',
                                   'Martinique' => 'Martinique',
                                   'Mauritania' => 'Mauritania',
                                   'Mauritius' => 'Mauritius',
                                   'Mayotte' => 'Mayotte',
                                   'Mexico' => 'Mexico',
                                   'Micronesia' => 'Micronesia',
                                   'Moldova' => 'Moldova',
                                   'Monaco' => 'Monaco',
                                   'Mongolia' => 'Mongolia',
                                   'Montenegro' => 'Montenegro',
                                   'Montserrat' => 'Montserrat',
                                   'Morocco' => 'Morocco',
                                   'Mozambique' => 'Mozambique',
                                   'Myanmar (Burma)' => 'Myanmar (Burma)',
                                   'Myanmar (Burma)Nauru' => 'Nauru',
                                   'Nauru' => 'Nauru',
                                   'Nepal' => 'Nepal',
                                   'Netherlands' => 'Netherlands',
                                   'New Caledonia' => 'New Caledonia',
                                   'New Zealand' => 'New Zealand',
                                   'Nicaragua' => 'Nicaragua',
                                   'Niger' => 'Niger',
                                   'Nigeria' => 'Nigeria',
                                   'Niue' => 'Niue',
                                   'Norfolk Island' => 'Norfolk Island',
                                   'North Korea' => 'North Korea',
                                   'Northern Mariana Islands' => 'Northern Mariana Islands',
                                   'Norway' => 'Norway',
                                   'Pakistan' => 'Pakistan',
                                   'Palau' => 'Palau',
                                   'Palestinian Territories' => 'Palestinian Territories',
                                   'Panama' => 'Panama',
                                   'Papua New Guinea' => 'Papua New Guinea',
                                   'Paraguay' => 'Paraguay',
                                   'Peru' => 'Peru',
                                   'Philippines' => 'Philippines',
                                   'Pitcairn Islands' => 'Pitcairn Islands',
                                   'Portugal' => 'Portugal',
                                   'Puerto Rico' => 'Puerto Rico',
                                   'Qatar' => 'Qatar',
                                   'Romania' => 'Romania',
                                   'Russia' => 'Russia',
                                   'Rwanda' => 'Rwanda',
                                   'Samoa' => 'Samoa',
                                   'San Marino' => 'San Marino',
                                   'S�o Tom� and Pr�ncipe' => 'S�o Tom� and Pr�ncipe',
                                   'Saudi Arabia' => 'S�o Tom� and Pr�Saudi Arabia',
                                   'Senegal' => 'Senegal',
                                   'Serbia' => 'Serbia',
                                   'Seychelles' => 'Seychelles',
                                   'Sierra Leone' => 'Sierra Leone',
                                   'Singapore' => 'Singapore',
                                   'Sint Maarten' => 'Sint Maarten',
                                   'Slovakia' => 'Slovakia',
                                   'Slovenia' => 'Slovenia',
                                   'Solomon Islands' => 'Solomon Islands',
                                   'Somalia' => 'Somalia',
                                   'South Africa' => 'South Africa',
                                   'South Georgia and South Sandwich Islands' => 'South Georgia and South Sandwich Islands',
                                   'South Korea' => 'South Korea',
                                   'South Sudan' => 'South Sudan',
                                   'Spain' => 'Spain',
                                   'Sri Lanka' => 'Sri Lanka',
                                   'St. Barth�lemy' => 'St. Barth�lemy',
                                   'St. Helena' => 'St. Helena',
                                   'St. Kitts and Nevis' => 'St. Kitts and Nevis',
                                   'St. Martin' => 'St. Martin',
                                   'St. Pierre and Miquelon' => 'St. Pierre and Miquelon',
                                   'St. Vincent and Grenadines' => 'St. Vincent and Grenadines',
                                   'Sudan' => 'Sudan',
                                   'Suriname' => 'Suriname',
                                   'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
                                   'Swaziland' => 'Swaziland',
                                   'Sweden' => 'Sweden',
                                   'Switzerland' => 'Switzerland',
                                   'Syria' => 'Syria',
                                   'Taiwan' => 'Taiwan',
                                   'Tajikistan' => 'Tajikistan',
                                   'Tanzania' => 'Tanzania',
                                   'Thailand' => 'Thailand',
                                   'Timor-Leste' => 'Timor-Leste',
                                   'Togo' => 'Togo',
                                   'Tokelau' => 'Tokelau',
                                   'Tonga' => 'Tonga',
                                   'Trinidad and Tobago' => 'Trinidad and Tobago',
                                   'Tristan da Cunha' => 'Tristan da Cunha',
                                   'Tunisia' => 'Tunisia',
                                   'Turkey' => 'Turkey',
                                   'Turkmenistan' => 'Turkmenistan',
                                   'Turks and Caicos Islands' => 'Turks and Caicos Islands',
                                   'Tuvalu'  =>  'Tuvalu',
                                   'U.S. Virgin Islands'  =>  'U.S. Virgin Islands',
                                   'Uganda'  =>  'Uganda',
                                   'Ukraine'  =>  'Ukraine',
                                   'United Arab Emirates'  =>  'United Arab Emirates',
                                   'United Kingdom'  =>  'United Kingdom',
                                   'United States'  =>  'United States',
                                   'Uruguay'  =>  'Uruguay',
                                   'Uzbekistan'  =>  'Uzbekistan',
                                   'Vanuatu'  =>  'Vanuatu',
                                   'Vatican City'  =>  'Vatican City',
                                   'Vietnam'  =>  'Vietnam',
                                   'Wallis and Futuna'  =>  'Wallis and Futuna',
                                   'Western Sahara'  =>  'Western Sahara',
                                   'Yemen'  =>  'Yemen',
                                   'Zambia'  =>  'Zambia',
                                   'Zimbabwe'  =>  'Zimbabwe',
                                   ),
                                    NULL, array('class' => 'form-control',
                                    'placeholder' => '--Select Country--',
                                    'id'=> 'gender',
                                    'v-model' => 'country'))

                                  }}
                            </div>
                        </div>
                        <br/>
                        <input type="hidden" v-model="password" name="raw_password">
                        <div class="form-group">
                            <div class="col-md-6">
                                {{ Form::password('password',
                                     ["class" => 'form-control',
                                    'id'=>"password",
                                    "placeholder"=>"ENTER PASSWORD",
                                    'v-model' => 'password'])
                                 }}

                            </div>

                            <div class="col-md-6">

                                {{ Form::password('repeat_password',
                                     ["class" => 'form-control',
                                    'id'=>"password",
                                    "placeholder"=>"REPEAT PASSWORD",
                                    'v-model' => 'repeat_password'
                                    ])
                                 }}
                            </div>
                        </div>
                        <br/>

                        <div class="row text-center">
                            <button type="submit" class="btn btn-primary"
                                    :disabled="password === '' || repeat_password === '' || email === ''
                                    || country === '' || sex === '' || first_name === '' || last_name === ''
                                     || usercategory_id === '' || phone === '' || password !== repeat_password  ">Register</button>
                        </div>



                        {!! Form::close() !!}

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
                message: 'Hello Emoshogwe!',
                theValue: '',
                sex: '',
                first_name:'',
                last_name:'',
                email: '',
                password: '',
                raw_password: '',
                repeat_password: '',
                phone: '',
                usercategory_id: '',
                country:''
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