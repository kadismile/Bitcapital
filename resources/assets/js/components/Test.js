import React from 'react'


const Test = ()=>(


    <div className="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div className="modal-dialog" role="document">
            <div className="modal-content">

                <div className="modal-body">
                    <div className="form-container">
                        <div>

                            <div className="row text-center">
                                <h2 className="title-head hidden-xs"><span>Register</span></h2>
                                <p className="info-form">Open account and start trading Bitcoins now!</p>
                            </div>

                            <form>

                                <div className="form-group">
                                    <input className="form-control" name="name" id="name" placeholder="FIRST NAME" type="text" required/>
                                </div>

                                <div className="form-group">
                                    <input className="form-control" name="name" id="name" placeholder="LAST NAME" type="text" required/>
                                </div>

                                <div className="form-group">
                                    <input className="form-control" name="email" id="email" placeholder="EMAIL" type="email" required/>
                                </div>

                                <div className="form-group">
                                    <input className="form-control" name="phone" id="phone" placeholder="PHONE" type="text" required/>
                                </div>

                                <div className="form-group">
                                    <select id="user_gender" required="" name="user_gender" className="form-control" placeholder="Sex*">
                                        <option value=""> --Select Sex-- </option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                    </select>
                                </div>

                                <div className="form-group">
                                    <select id="user_country_id" required="" type="text" name="user_country_id" className="form-control">
                                        <option value="">--Select Country--</option>
                                        <option value="1"> Afghanistan </option>
                                        <option value="2"> Aland Islands </option>
                                        <option value="3"> Albania </option>
                                        <option value="4"> Algeria </option>
                                        <option value="5"> American Samoa </option>
                                        <option value="6"> Andorra </option>
                                        <option value="7"> Angola </option>
                                        <option value="8"> Anguilla </option>
                                        <option value="9"> Antarctica </option>
                                        <option value="10"> Antigua &amp; Barbuda </option>
                                        <option value="11"> Argentina </option>
                                        <option value="12"> Armenia </option>
                                        <option value="13"> Aruba </option>
                                        <option value="14"> Ascension Island </option>
                                        <option value="15"> Australia </option>
                                        <option value="16"> Austria </option>
                                        <option value="17"> Azerbaijan </option>
                                        <option value="18"> Bahamas </option>
                                        <option value="19"> Bahrain </option>
                                        <option value="20"> Bangladesh </option>
                                        <option value="21"> Barbados </option>
                                        <option value="22"> Belarus </option>
                                        <option value="23"> Belize </option>
                                        <option value="24"> Benin </option>
                                        <option value="25"> Bermuda </option>
                                        <option value="26"> Bhutan </option>
                                        <option value="27"> Bolivia </option>
                                        <option value="28"> Bosnia &amp; Herzegovina </option>
                                        <option value="29"> Botswana </option>
                                        <option value="30"> Brazil </option>
                                        <option value="31"> British Indian Ocean Territory </option>
                                        <option value="32"> British Virgin Islands </option>
                                        <option value="33"> Brunei </option>
                                        <option value="34"> Bulgaria </option>
                                        <option value="35"> Burkina Faso </option>
                                        <option value="36"> Burundi </option>
                                        <option value="37"> Cambodia </option>
                                        <option value="38"> Cameroon </option>
                                        <option value="39"> Canada </option>
                                        <option value="40"> Canary Islands </option>
                                        <option value="41"> Cape Verde </option>
                                        <option value="42"> Caribbean Netherlands </option>
                                        <option value="43"> Cayman Islands </option>
                                        <option value="44"> Central African Republic </option>
                                        <option value="45"> Ceuta &amp; Melilla </option>
                                        <option value="46"> Chad </option>
                                        <option value="47"> Chile </option>
                                        <option value="48"> China </option>
                                        <option value="49"> Christmas Island </option>
                                        <option value="50"> Cocos (Keeling) Islands </option>
                                        <option value="51"> Colombia </option>
                                        <option value="52"> Comoros </option>
                                        <option value="53"> Congo - Brazzaville </option>
                                        <option value="54"> Congo - Kinshasa </option>
                                        <option value="55"> Cook Islands </option>
                                        <option value="56"> Costa Rica </option>
                                        <option value="57"> C�te d�Ivoire </option>
                                        <option value="58"> Croatia </option>
                                        <option value="59"> Cuba </option>
                                        <option value="60"> Cura�ao </option>
                                        <option value="61"> Cyprus </option>
                                        <option value="62"> Czech Republic </option>
                                        <option value="63"> Denmark </option>
                                        <option value="64"> Diego Garcia </option>
                                        <option value="65"> Djibouti </option>
                                        <option value="66"> Dominica </option>
                                        <option value="67"> Dominican Republic </option>
                                        <option value="68"> Ecuador </option>
                                        <option value="69"> Egypt </option>
                                        <option value="70"> El Salvador </option>
                                        <option value="71"> Equatorial Guinea </option>
                                        <option value="72"> Eritrea </option>
                                        <option value="73"> Estonia </option>
                                        <option value="74"> Ethiopia </option>
                                        <option value="75"> Falkland Islands </option>
                                        <option value="76"> Faroe Islands </option>
                                        <option value="77"> Fiji </option>
                                        <option value="78"> Finland </option>
                                        <option value="79"> France </option>
                                        <option value="80"> French Guiana </option>
                                        <option value="81"> French Polynesia </option>
                                        <option value="82"> French Southern Territories </option>
                                        <option value="83"> Gabon </option>
                                        <option value="84"> Gambia </option>
                                        <option value="85"> Georgia </option>
                                        <option value="86"> Germany </option>
                                        <option value="87"> Ghana </option>
                                        <option value="88"> Gibraltar </option>
                                        <option value="89"> Greece </option>
                                        <option value="90"> Greenland </option>
                                        <option value="91"> Grenada </option>
                                        <option value="92"> Guadeloupe </option>
                                        <option value="93"> Guam </option>
                                        <option value="94"> Guatemala </option>
                                        <option value="95"> Guernsey </option>
                                        <option value="96"> Guinea </option>
                                        <option value="97"> Guinea-Bissau </option>
                                        <option value="98"> Guyana </option>
                                        <option value="99"> Haiti </option>
                                        <option value="100"> Honduras </option>
                                        <option value="101"> Hong Kong SAR China </option>
                                        <option value="102"> Hungary </option>
                                        <option value="103"> Iceland </option>
                                        <option value="104"> India </option>
                                        <option value="105"> Indonesia </option>
                                        <option value="106"> Iran </option>
                                        <option value="107"> Iraq </option>
                                        <option value="108"> Ireland </option>
                                        <option value="109"> Isle of Man </option>
                                        <option value="110"> Israel </option>
                                        <option value="111"> Italy </option>
                                        <option value="112"> Jamaica </option>
                                        <option value="113"> Japan </option>
                                        <option value="114"> Jersey </option>
                                        <option value="115"> Jordan </option>
                                        <option value="116"> Kazakhstan </option>
                                        <option value="117"> Kenya </option>
                                        <option value="118"> Kiribati </option>
                                        <option value="119"> Kosovo </option>
                                        <option value="120"> Kuwait </option>
                                        <option value="121"> Kyrgyzstan </option>
                                        <option value="122"> Laos </option>
                                        <option value="123"> Latvia </option>
                                        <option value="124"> Lebanon </option>
                                        <option value="125"> Lesotho </option>
                                        <option value="126"> Liberia </option>
                                        <option value="127"> Libya </option>
                                        <option value="128"> Liechtenstein </option>
                                        <option value="129"> Lithuania </option>
                                        <option value="130"> Luxembourg </option>
                                        <option value="131"> Macau SAR China </option>
                                        <option value="132"> Macedonia </option>
                                        <option value="133"> Madagascar </option>
                                        <option value="134"> Malawi </option>
                                        <option value="135"> Malaysia </option>
                                        <option value="136"> Maldives </option>
                                        <option value="137"> Mali </option>
                                        <option value="138"> Malta </option>
                                        <option value="139"> Marshall Islands </option>
                                        <option value="140"> Martinique </option>
                                        <option value="141"> Mauritania </option>
                                        <option value="142"> Mauritius </option>
                                        <option value="143"> Mayotte </option>
                                        <option value="144"> Mexico </option>
                                        <option value="145"> Micronesia </option>
                                        <option value="146"> Moldova </option>
                                        <option value="147"> Monaco </option>
                                        <option value="148"> Mongolia </option>
                                        <option value="149"> Montenegro </option>
                                        <option value="150"> Montserrat </option>
                                        <option value="151"> Morocco </option>
                                        <option value="152"> Mozambique </option>
                                        <option value="153"> Myanmar (Burma) </option>
                                        <option value="154"> Namibia </option>
                                        <option value="155"> Nauru </option>
                                        <option value="156"> Nepal </option>
                                        <option value="157"> Netherlands </option>
                                        <option value="158"> New Caledonia </option>
                                        <option value="159"> New Zealand </option>
                                        <option value="160"> Nicaragua </option>
                                        <option value="161"> Niger </option>
                                        <option value="162"> Nigeria </option>
                                        <option value="163"> Niue </option>
                                        <option value="164"> Norfolk Island </option>
                                        <option value="165"> North Korea </option>
                                        <option value="166"> Northern Mariana Islands </option>
                                        <option value="167"> Norway </option>
                                        <option value="168"> Oman </option>
                                        <option value="169"> Pakistan </option>
                                        <option value="170"> Palau </option>
                                        <option value="171"> Palestinian Territories </option>
                                        <option value="172"> Panama </option>
                                        <option value="173"> Papua New Guinea </option>
                                        <option value="174"> Paraguay </option>
                                        <option value="175"> Peru </option>
                                        <option value="176"> Philippines </option>
                                        <option value="177"> Pitcairn Islands </option>
                                        <option value="178"> Poland </option>
                                        <option value="179"> Portugal </option>
                                        <option value="180"> Puerto Rico </option>
                                        <option value="181"> Qatar </option>
                                        <option value="182"> R�union </option>
                                        <option value="183"> Romania </option>
                                        <option value="184"> Russia </option>
                                        <option value="185"> Rwanda </option>
                                        <option value="186"> Samoa </option>
                                        <option value="187"> San Marino </option>
                                        <option value="188"> S�o Tom� &amp; Pr�ncipe </option>
                                        <option value="189"> Saudi Arabia </option>
                                        <option value="190"> Senegal </option>
                                        <option value="191"> Serbia </option>
                                        <option value="192"> Seychelles </option>
                                        <option value="193"> Sierra Leone </option>
                                        <option value="194"> Singapore </option>
                                        <option value="195"> Sint Maarten </option>
                                        <option value="196"> Slovakia </option>
                                        <option value="197"> Slovenia </option>
                                        <option value="198"> Solomon Islands </option>
                                        <option value="199"> Somalia </option>
                                        <option value="200"> South Africa </option>
                                        <option value="201"> South Georgia &amp; South Sandwich Islands </option>
                                        <option value="202"> South Korea </option>
                                        <option value="203"> South Sudan </option>
                                        <option value="204"> Spain </option>
                                        <option value="205"> Sri Lanka </option>
                                        <option value="206"> St. Barth�lemy </option>
                                        <option value="207"> St. Helena </option>
                                        <option value="208"> St. Kitts &amp; Nevis </option>
                                        <option value="209"> St. Lucia </option>
                                        <option value="210"> St. Martin </option>
                                        <option value="211"> St. Pierre &amp; Miquelon </option>
                                        <option value="212"> St. Vincent &amp; Grenadines </option>
                                        <option value="213"> Sudan </option>
                                        <option value="214"> Suriname </option>
                                        <option value="215"> Svalbard &amp; Jan Mayen </option>
                                        <option value="216"> Swaziland </option>
                                        <option value="217"> Sweden </option>
                                        <option value="218"> Switzerland </option>
                                        <option value="219"> Syria </option>
                                        <option value="220"> Taiwan </option>
                                        <option value="221"> Tajikistan </option>
                                        <option value="222"> Tanzania </option>
                                        <option value="223"> Thailand </option>
                                        <option value="224"> Timor-Leste </option>
                                        <option value="225"> Togo </option>
                                        <option value="226"> Tokelau </option>
                                        <option value="227"> Tonga </option>
                                        <option value="228"> Trinidad &amp; Tobago </option>
                                        <option value="229"> Tristan da Cunha </option>
                                        <option value="230"> Tunisia </option>
                                        <option value="231"> Turkey </option>
                                        <option value="232"> Turkmenistan </option>
                                        <option value="233"> Turks &amp; Caicos Islands </option>
                                        <option value="234"> Tuvalu </option>
                                        <option value="235"> U.S. Virgin Islands </option>
                                        <option value="236"> Uganda </option>
                                        <option value="237"> Ukraine </option>
                                        <option value="238"> United Arab Emirates </option>
                                        <option value="239"> United Kingdom </option>
                                        <option value="251"> United States </option>
                                        <option value="240"> Uruguay </option>
                                        <option value="241"> Uzbekistan </option>
                                        <option value="242"> Vanuatu </option>
                                        <option value="243"> Vatican City </option>
                                        <option value="244"> Venezuela </option>
                                        <option value="245"> Vietnam </option>
                                        <option value="246"> Wallis &amp; Futuna </option>
                                        <option value="247"> Western Sahara </option>
                                        <option value="248"> Yemen </option>
                                        <option value="249"> Zambia </option>
                                        <option value="250"> Zimbabwe </option>
                                    </select>
                                </div>


                                <div className="form-group">
                                    <input className="form-control" name="password" id="password" placeholder="ENTER PASSWORD" type="password" required/>
                                </div>

                                <div className="form-group">
                                    <input className="form-control" name="password" id="password" placeholder="REPEAT PASSWORD" type="password" required/>
                                </div>

                                <div className="form-group">
                                    <button className="btn btn-primary" type="submit">create account</button>
                                    <p className="text-center">already have an account ? <a href="login.php">Login</a></p>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div className="modal-footer">
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" className="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



);
export default Test
    
    
    
    
