@extends('admin')
@section('title', 'Home | ERCC')
@section('content')


    <div class="app-wrap">

        <!-- BEGIN .app-container -->
        <div class="app-container">


            <!-- BEGIN .app-main -->
            <div class="app-main">
                <!-- BEGIN .main-heading -->
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="page-icon">
                                    <i class="icon-center_focus_strong"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Edit {{$user->first_name}} PROFILE </h5>
                                    {!! Helper::walletNames(1) !!}

                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                <!-- END: .main-heading -->
                <!-- BEGIN .main-content -->
                <div class="main-content">
                    <!-- Row start -->
                    <div class="row gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">



                                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" aria-expanded="true">Edit User</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" aria-expanded="false">Add Deposit</a>
                                                </li>

                                            </ul>


                                            <div class="tab-content" id="myTabContent1">
                                                <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab1" aria-expanded="true">


                                                    <div class="card-body">
                                                        {!! Form::model($user, ['route' => ['admin.user.update', $user->id], 'method' => 'PUT']) !!}

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

                                                        {{-- Current Balance
                                                         <div class="form-group">
                                                             {{ Form::text('current_balance', null,
                                                                  ["class" => 'form-control form-control-lg',
                                                                  "placeholder"=>"LAST NAME"])
                                                             }}
                                                         </div>--}}

                                                        Commission Balance
                                                        <div class="form-group">
                                                            {{ Form::text('commission_balance', null,
                                                                 ["class" => 'form-control form-control-lg',
                                                                 "placeholder"=>"LAST NAME"])
                                                            }}
                                                        </div>

                                                        Profit Balance
                                                        <div class="form-group">
                                                            {{ Form::text('profit_balance', null,
                                                                 ["class" => 'form-control form-control-lg',
                                                                 "placeholder"=>"LAST NAME"])
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

                                                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                {!! Form::open(array('route' => 'admin.deposit.post', 'files' => true)) !!}

                                                                <div class="card">
                                                                    <div class="card-header">Fund {{$user->first_name}} Account </div>
                                                                    <div class="card-body">
                                                                        <div class="form-inline">


                                                                            <input name="user_id" value="{{$user->id}}" type="hidden" class='form-control' style="width: 45%;">

                                                                            <input name="amount" type="text" class='form-control' style="width: 45%;">

                                                                            <br>
                                                                            <br>




                                                                        </div>


                                                                        <br>
                                                                        <br>
                                                                        <div style="width: 45%; margin-right:10px">
                                                                            <button type="submit" class="btn btn-primary "> Deposit Fund</button>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                {!! Form::close() !!}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
                <!-- END: .main-content -->
            </div>
            <!-- END: .app-main -->
        </div>
        <!-- END: .app-container -->
        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            Copyright Unify Admin 2017.
        </footer>
        <!-- END: .main-footer -->
    </div>


@endsection