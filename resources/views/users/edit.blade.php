@extends('profile')
@section('title', 'Home | ERCC')
@section('content')














    <div class="main-content" style="font-size: 13px">

       {{-- <div class="visible-xs">
            <div class="row gutters">



                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                    <a href="#" class="block-140" style="background: #00c0ef !important">
                        <div class="icon violet">
                            <i class="icon-coin-dollar"></i>
                        </div>
                        <h5 style="color: white">${!! number_format(Helper::accountBalance()) !!}</h5>
                        <p style="color: white">Account Balance</p>
                    </a>

                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                    <a href="#" class="block-140" style="background:#00a65a !important">
                        <div class="icon violet">
                            <i class="icon-arrow-up-thick"></i>
                        </div>
                        <h5 style="color: white">${!! number_format(Helper::activeDeposits())  !!}</h5>
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
                        <h5 style="color: white">$0</h5>
                        <p style="color: white">Avail. Profits</p>
                    </a>

                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >
                    <a href="#" class="block-140" style="background:#dd4b39 !important;">
                        <div class="icon violet">
                            <i class="icon-coin-dollar"></i>
                        </div>
                        <h5 style="color: white">$0</h5>
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
                        <h5 style="color: white">${!! number_format(Helper::commisiionBalance()) !!}</h5>
                        <p style="color: white">Avail. Commissions</p>
                    </a>

                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col" >


                </div>

            </div>
        </div>--}}



        <div id="apps">
           <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 hidden-xs">
                <div class="card">
                    <div class="user-profile" style="text-align: center">
                        <img class="profile-thumb" src="/images/users/user.png" alt="User Thumb">
                        <h6 class="profile-name">Ibrahim</h6>
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px">
                        <div class="card">

                                <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Update Profile Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Change Password</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Profile Photo</a>
                                    </li>





                                </ul>


                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                            <div class="card">

                                                <div class="card-body">
                                                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT','files'=>true]) !!}



                                                    <div class="form-group">
                                                        {{ Form::select('usercategory_id',
                                                            array(
                                                            '1' => 'BASIC $1000 AT 2.15% DAILY ROI',
                                                            '2' => 'STANDARD $2000 AT 5% DAILY ROI',
                                                            '3' => 'ADVANCE $5000  AT 7% DAILY ROI',
                                                            '4' => 'PREMIUM $10,000 AT 8.8% DAILY ROI',
                                                            '5' => 'ULTIMATE $15,000 AT 10.01% DAILY ROI',
                                                            '6' => 'GOLD $20,000 AT 15.15% DAILY ROI',
                                                            ),
                                                            NULL, array('class' => 'form-control',
                                                            'placeholder' => '--Select Package--',
                                                            'id'=> 'usercategory'))
                                                        }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::text('first_name', null,
                                                          ["class" => 'form-control form-control-lg',
                                                          "placeholder"=>"FIRST NAME"])
                                                        }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::text('last_name', null,
                                                             ["class" => 'form-control form-control-lg',
                                                             "placeholder"=>"LAST NAME"])
                                                        }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::text('email', null,
                                                             ["class" => 'form-control form-control-lg',
                                                             "placeholder"=>"EMAIL"])
                                                        }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::text('phone', null,
                                                             ["class" => 'form-control form-control-lg',
                                                             "placeholder"=>"PHONE"])
                                                        }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{
                                                           Form::select('sex',
                                                           array(
                                                           'Male' => 'Male',
                                                           'Female' => 'Female'),
                                                           NULL, array('class' => 'form-control form-control-lg',
                                                           'placeholder' => '--Select Sex--',
                                                           'id'=> 'gender'))

                                                        }}
                                                    </div>

                                                    <div class="form-group">
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
                                                            'id'=> 'gender'))

                                                        }}
                                                    </div>

                                                    <br>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="row text-center">
                                                            <button type="submit" class="btn btn-primary form-control form-control-lg">Update User</button>
                                                        </div>
                                                    </div>

                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="card">

                                                <div class="card-body">

                                                    {!! Form::open(array('route' => 'password.post', )) !!}



                                                    <div class="form-group">
                                                        <input type="password" v-model="old_password" id="old_password" name="old_password" value="" class="form-control form-control-lg"
                                                               placeholder="CURRENT PASSWORD">
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="password" v-model="new_password" id="new_password" name="new_password" value="" class="form-control form-control-lg"
                                                               placeholder="NEW PASSWORD">
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="password" v-model="repeat_password" id="repeat_password" name="repeat_password" value="" class="form-control form-control-lg"
                                                               placeholder="REPEAT NEW PASSWORD">
                                                    </div>



                                                    <br>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="row text-center">
                                                            <button type="submit"
                                                                    class="btn btn-primary form-control form-control-lg"
                                                                    :disabled="old_password === '' || new_password === '' ||
                                                                              repeat_password === '' || new_password !== repeat_password "
                                                            >
                                                                Update Password
                                                            </button>
                                                        </div>
                                                    </div>

                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2" aria-expanded="false">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="card">

                                                <div class="card-body">


                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                                        <div class="user-profile ">
                                                            <img class="profile-thumb pull-left" style="margin-right: 30px" src="/images/users/user.png" alt="User Thumb">

                                                            {!! Form::open(array('route' => 'photo.post', 'files' => true )) !!}

                                                            <input id="fileUpload" ref="file" name="avatar" type="file" class="control-label">
                                                            <br>
                                                             <button type="submit" class="btn btn-primary btn-xs ">Upload Photo</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                        <div class="pull-right">

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

        </div>
        </div>





        {{-- Mobile End--}}

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
                old_password: '',
                new_password: '',
                repeat_password: '',
                oFile: document.getElementById("fileUpload").files[0],
                file: this.$refs.file.files[0],
                message: 'salim is cool'
            },
            methods: {
                oldPassword: function (id){
                    this.old_password = id;
                },

                OldPassword: function (e) {
                    this.oldPassword(e.target.value)
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