import React, { Component } from 'react'
import {Link} from 'react-router-dom'
import {connect} from 'react-redux'
import {authActions, categoryActions} from './_actions/authActions'
import axios from 'axios'

class Editprofile extends Component {

    constructor (props) {
        super(props);
        const {auth} = props;
        this.state = {
            email: auth.email, password: '', confirmPassword:'',
            firstName:auth.first_name, lastName:auth.last_name, phone:auth.phone,
            usercategory:'', gender:auth.sex, country:auth.country,
            /*########################################*/
            formErrors: {email: '', password: '', confirmPassword:'', firstName:'',
                lastName:'', phone:'', usercategory:'', sex:'', country:'',},
            firstNameValid: false,
            lastNameValid: false,
            passwordValid: false,
            confirmPasswordValid: false,
            emailValid: false,
            phoneValid: false,
            sexValid: false,
            countryValid:false,
            usercategoryValid:false,
            formValid: false

        };
        this.formSubmitted = this.formSubmitted.bind(this);
        this.handleUserInput = this.handleUserInput.bind(this);
    }

    formSubmitted(e,){
        e.preventDefault();
        let form = new FormData();
        let username = this.state.firstName;
        form.append("first_name", this.state.firstName);
        form.append("last_name", this.state.lastName);
        form.append("usercategory_id", this.state.usercategory);
        form.append("email", this.state.email);
        form.append("password",  this.state.password);
        form.append("phone",  this.state.phone);
        form.append("username",  username);
        form.append("sex",  this.state.gender);
        form.append("country",  this.state.country);

        let settings = {
            "async": true,
            "crossDomain": true,
            "url": "http://localhost:8000/api/register",
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
            console.log(response);
        }).catch((error) => {
            console.log(error);
        });

        this.props.loginUser(this.state.email, this.state.password);

        this.setState({email: '', password: '', confirmPassword:'',
            firstName:'', lastName:'', phone:'',
            usercategory:'', gender:'', country:'',});



    }

    handleUserInput (e) {
        const name = e.target.name;
        const value = e.target.value;
        this.setState({[name]: value});
    }

    validateField(fieldName, value) {
        let fieldValidationErrors = this.state.formErrors;
        let emailValid = this.state.emailValid;
        let passwordValid = this.state.passwordValid;
        let confirmPasswordValid = this.state.confirmPasswordValid;
        let phoneValid = this.state.phoneValid;
        let firstNameValid = this.state.firstNameValid;
        let lastNameValid = this.state.lastNameValid;
        let countryValid = this.state.countryValid;

        switch(fieldName) {
            case 'email':
                emailValid = value.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i);
                fieldValidationErrors.email = emailValid ? '' : ' is invalid';
                break;
            case 'password':
                passwordValid = value.length >= 6;
                fieldValidationErrors.password = passwordValid ? '': ' is too short';
                break;
            case 'confirmPassword':
                confirmPasswordValid = value === this.state.password;
                fieldValidationErrors.confirmPassword = confirmPasswordValid ? '': ' password mismatch';
                break;
            case 'phone':
                phoneValid = value.length >= 10;
                fieldValidationErrors.phone = phoneValid ? '': ' the phone Number is not valid';
                break;
            case 'firstName':
                firstNameValid = value.length >= 3;
                fieldValidationErrors.firstName = firstNameValid ? '': ' Your First Name is not long Enough';
                break;
            case 'lastName':
                lastNameValid = value.length >= 3;
                fieldValidationErrors.lastName = lastNameValid ? '': ' Your Last Name is not long Enough';
                break;

            default:
                break;
        }
        this.setState({formErrors: fieldValidationErrors,
            firstNameValid: firstNameValid,
            lastNameValid: lastNameValid
        }, this.validateForm);
    }






    render(){
        const {auth} = this.props;
        return (
            <div className="container-fluid user-auth">
                <div className="hidden-xs col-sm-3 col-md-3 col-lg-3">


                    <div id="carousel-testimonials" className="carousel slide carousel-fade" data-ride="carousel">

                        <ol className="carousel-indicators">
                            <li data-target="#carousel-testimonials" data-slide-to="0" className="active"></li>
                            <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                            <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                        </ol>

                        <div className="carousel-inner">

                            <div className="item active item-1">
                                <div>
                                    <blockquote>
                                        <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                        <footer><span>Lucy Smith</span>, England</footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div className="item item-2">
                                <div>
                                    <blockquote>
                                        <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                        <footer><span>Slim Hamdi</span>, Tunisia</footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div className="item item-3">
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
                <div className="col-xs-12 col-sm-9 col-md-9 col-lg-9">


                    <div className="form-container" >
                        <div>

                            <div className="row text-center">
                                <h2 className="title-head hidden-xs">Edit <span>{auth.username}'s </span> Profile</h2>
                                <p className="info-form">Open account and start trading Bitcoins now!</p>
                            </div>



                            <form style={{maxWidth: '800px'}}>


                                <br/>
                                <br/>

                                <div className="form-group">
                                    <div className="col-md-6">
                                        <input className={'form-control'}
                                               onChange={(event) => this.handleUserInput(event)}
                                               value={this.state.firstName}  name="firstName"
                                               placeholder="FIRST NAME" type="text" required />
                                        <span className="myError"> {this.state.formErrors.firstName}</span>
                                    </div>
                                    <div className="col-md-6">
                                        <input  className={'form-control'}
                                                onChange={(event) => this.handleUserInput(event)}
                                                value={this.state.lastName} name="lastName"
                                                placeholder="LAST NAME" type="text" required/></div>
                                    <span className="myError"> {this.state.formErrors.firstName}</span>
                                </div>

                                <br/>
                                <div className="form-group">
                                    <div className="col-md-6">
                                        <input className="form-control"
                                               onChange={(event) => this.handleUserInput(event)}
                                               value={this.state.email} name="email"
                                               placeholder="EMAIL" type="text" required/>
                                    </div>
                                    <div className="col-md-6">
                                        <input className="form-control"
                                               onChange={(event) => this.handleUserInput(event)}
                                               value={this.state.phone} name="phone"
                                               placeholder="PHONE" type="text" required/></div>
                                </div>
                                <br/>

                                <div className="form-group">
                                    <div className="col-md-6">
                                        <select id="gender" value={this.state.gender} className="form-control" name="gender"  onChange={(event) => this.handleUserInput(event)}>
                                            <option value=""> --Select Sex-- </option>
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female </option>
                                        </select>
                                    </div>
                                    <div className="col-md-6">

                                        <select id="user_country_id" value={this.state.country} className="form-control" name="country"  onChange={(event) => this.handleUserInput(event)}>
                                            <option value="">--Select Country--</option>
                                            <option value="Afghanistan"> Afghanistan </option>
                                            <option value="Aland Islands"> Aland Islands </option>
                                            <option value="Albania"> Albania </option>
                                            <option value="Algeria"> Algeria </option>
                                            <option value="American Samoa"> American Samoa </option>
                                            <option value="Andorra"> Andorra </option>
                                            <option value="Angola"> Angola </option>
                                            <option value="Anguilla"> Anguilla </option>
                                            <option value="Antarctica"> Antarctica </option>
                                            <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                            <option value="Argentina"> Argentina </option>
                                            <option value="Armenia"> Armenia </option>
                                            <option value="Aruba"> Aruba </option>
                                            <option value="Ascension Island"> Ascension Island </option>
                                            <option value="Australia"> Australia </option>
                                            <option value="Austria"> Austria </option>
                                            <option value="Azerbaijan"> Azerbaijan </option>
                                            <option value="Bahamas"> Bahamas </option>
                                            <option value="Bahrain"> Bahrain </option>
                                            <option value="Bangladesh"> Bangladesh </option>
                                            <option value="Barbados"> Barbados </option>
                                            <option value="Belarus"> Belarus </option>
                                            <option value="Belize"> Belize </option>
                                            <option value="Benin"> Benin </option>
                                            <option value="Bermuda"> Bermuda </option>
                                            <option value="Bhutan"> Bhutan </option>
                                            <option value="Bolivia"> Bolivia </option>
                                            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                            <option value="Botswana"> Botswana </option>
                                            <option value="Brazil"> Brazil </option>
                                            <option value="British Indian Ocean Territory"> British Indian Ocean Territory </option>
                                            <option value="British Virgin Islands"> British Virgin Islands </option>
                                            <option value="Brunei"> Brunei </option>
                                            <option value="Bulgaria"> Bulgaria </option>
                                            <option value="Burkina Faso"> Burkina Faso </option>
                                            <option value="Burundi"> Burundi </option>
                                            <option value="Cambodia"> Cambodia </option>
                                            <option value="Cameroon"> Cameroon </option>
                                            <option value="Canada"> Canada </option>
                                            <option value="Canary Islands"> Canary Islands </option>
                                            <option value="Cape Verde"> Cape Verde </option>
                                            <option value="Caribbean Netherlands"> Caribbean Netherlands </option>
                                            <option value="Cayman Islands"> Cayman Islands </option>
                                            <option value="Central African Republic"> Central African Republic </option>
                                            <option value="Ceuta and Melilla"> Ceuta and Melilla </option>
                                            <option value="Chad"> Chad </option>
                                            <option value="Chile"> Chile </option>
                                            <option value="China"> China </option>
                                            <option value="Christmas Island"> Christmas Island </option>
                                            <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                            <option value="Colombia"> Colombia </option>
                                            <option value="Comoros"> Comoros </option>
                                            <option value="Congo - Brazzaville"> Congo - Brazzaville </option>
                                            <option value="Congo - Kinshasa"> Congo - Kinshasa </option>
                                            <option value="Cook Islands"> Cook Islands </option>
                                            <option value="Costa Rica"> Costa Rica </option>
                                            <option value="C�te d�Ivoire"> C�te d�Ivoire </option>
                                            <option value="Croatia"> Croatia </option>
                                            <option value="Cuba"> Cuba </option>
                                            <option value="Cura�ao"> Cura�ao </option>
                                            <option value="Cyprus"> Cyprus </option>
                                            <option value="Czech Republic"> Czech Republic </option>
                                            <option value="Denmark"> Denmark </option>
                                            <option value="Diego Garcia"> Diego Garcia </option>
                                            <option value="Djibouti"> Djibouti </option>
                                            <option value="Dominica"> Dominica </option>
                                            <option value="Dominican Republic"> Dominican Republic </option>
                                            <option value="Ecuador"> Ecuador </option>
                                            <option value="Egypt"> Egypt </option>
                                            <option value="El Salvador"> El Salvador </option>
                                            <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                            <option value="Eritrea"> Eritrea </option>
                                            <option value="Estonia"> Estonia </option>
                                            <option value="Ethiopia"> Ethiopia </option>
                                            <option value="Falkland Islands"> Falkland Islands </option>
                                            <option value="Faroe Islands"> Faroe Islands </option>
                                            <option value="Fiji"> Fiji </option>
                                            <option value="Finland"> Finland </option>
                                            <option value="France"> France </option>
                                            <option value="French Guiana"> French Guiana </option>
                                            <option value="French Polynesia"> French Polynesia </option>
                                            <option value="French Southern Territories"> French Southern Territories </option>
                                            <option value="Gabon"> Gabon </option>
                                            <option value="Gambia"> Gambia </option>
                                            <option value="Georgia"> Georgia </option>
                                            <option value="Germany"> Germany </option>
                                            <option value="Ghana"> Ghana </option>
                                            <option value="Gibraltar"> Gibraltar </option>
                                            <option value="Greece"> Greece </option>
                                            <option value="Greenland"> Greenland </option>
                                            <option value="Grenada"> Grenada </option>
                                            <option value="Guadeloupe"> Guadeloupe </option>
                                            <option value="Guam"> Guam </option>
                                            <option value="Guatemala"> Guatemala </option>
                                            <option value="Guernsey"> Guernsey </option>
                                            <option value="Guinea"> Guinea </option>
                                            <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                            <option value="Guyana"> Guyana </option>
                                            <option value="Haiti"> Haiti </option>
                                            <option value="Honduras"> Honduras </option>
                                            <option value="Hong Kong SAR China"> Hong Kong SAR China </option>
                                            <option value="Hungary"> Hungary </option>
                                            <option value="Iceland"> Iceland </option>
                                            <option value="India"> India </option>
                                            <option value="Indonesia"> Indonesia </option>
                                            <option value="Iran"> Iran </option>
                                            <option value="Iraq"> Iraq </option>
                                            <option value="Ireland"> Ireland </option>
                                            <option value="Isle of Man"> Isle of Man </option>
                                            <option value="Israel"> Israel </option>
                                            <option value="Italy"> Italy </option>
                                            <option value="Jamaica"> Jamaica </option>
                                            <option value="Japan"> Japan </option>
                                            <option value="Jersey"> Jersey </option>
                                            <option value="Jordan"> Jordan </option>
                                            <option value="Kazakhstan"> Kazakhstan </option>
                                            <option value="Kenya"> Kenya </option>
                                            <option value="Kiribati"> Kiribati </option>
                                            <option value="Kosovo"> Kosovo </option>
                                            <option value="Kuwait"> Kuwait </option>
                                            <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                            <option value="Laos"> Laos </option>
                                            <option value="Latvia"> Latvia </option>
                                            <option value="Lebanon"> Lebanon </option>
                                            <option value="Lesotho"> Lesotho </option>
                                            <option value="Liberia"> Liberia </option>
                                            <option value="Libya"> Libya </option>
                                            <option value="Liechtenstein"> Liechtenstein </option>
                                            <option value="Lithuania"> Lithuania </option>
                                            <option value="Luxembourg"> Luxembourg </option>
                                            <option value="Macau SAR China"> Macau SAR China </option>
                                            <option value="Macedonia"> Macedonia </option>
                                            <option value="Madagascar"> Madagascar </option>
                                            <option value="Malawi"> Malawi </option>
                                            <option value="Malaysia"> Malaysia </option>
                                            <option value="Maldives"> Maldives </option>
                                            <option value="Mali"> Mali </option>
                                            <option value="Malta"> Malta </option>
                                            <option value="Marshall Islands"> Marshall Islands </option>
                                            <option value="Martinique"> Martinique </option>
                                            <option value="Mauritania"> Mauritania </option>
                                            <option value="Mauritius"> Mauritius </option>
                                            <option value="Mayotte"> Mayotte </option>
                                            <option value="Mexico"> Mexico </option>
                                            <option value="Micronesia"> Micronesia </option>
                                            <option value="Moldova"> Moldova </option>
                                            <option value="Monaco"> Monaco </option>
                                            <option value="Mongolia"> Mongolia </option>
                                            <option value="Montenegro"> Montenegro </option>
                                            <option value="Montserrat"> Montserrat </option>
                                            <option value="Morocco"> Morocco </option>
                                            <option value="Mozambique"> Mozambique </option>
                                            <option value="Myanmar (Burma)"> Myanmar (Burma) </option>
                                            <option value="Nauru"> Namibia </option>
                                            <option value="155"> Nauru </option>
                                            <option value="Nepal"> Nepal </option>
                                            <option value="Netherlands"> Netherlands </option>
                                            <option value="New Caledonia"> New Caledonia </option>
                                            <option value="New Zealand"> New Zealand </option>
                                            <option value="Nicaragua"> Nicaragua </option>
                                            <option value="Niger"> Niger </option>
                                            <option value="Nigeria"> Nigeria </option>
                                            <option value="Niue"> Niue </option>
                                            <option value="Norfolk Island"> Norfolk Island </option>
                                            <option value="North Korea"> North Korea </option>
                                            <option value="Northern Mariana Islands"> Northern Mariana Islands </option>
                                            <option value="Norway"> Norway </option>
                                            <option value="Oman"> Oman </option>
                                            <option value="Pakistan"> Pakistan </option>
                                            <option value="Palau"> Palau </option>
                                            <option value="Palestinian Territories"> Palestinian Territories </option>
                                            <option value="Panama"> Panama </option>
                                            <option value="Papua New Guinea"> Papua New Guinea </option>
                                            <option value="Paraguay"> Paraguay </option>
                                            <option value="Peru"> Peru </option>
                                            <option value="Philippines"> Philippines </option>
                                            <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                            <option value="Poland"> Poland </option>
                                            <option value="Portugal"> Portugal </option>
                                            <option value="Puerto Rico"> Puerto Rico </option>
                                            <option value="Qatar"> Qatar </option>
                                            <option value="R�union"> R�union </option>
                                            <option value="Romania"> Romania </option>
                                            <option value="Russia"> Russia </option>
                                            <option value="Rwanda"> Rwanda </option>
                                            <option value="Samoa"> Samoa </option>
                                            <option value="San Marino"> San Marino </option>
                                            <option value="S�o Tom� and Pr�ncipe"> S�o Tom� and Pr�ncipe </option>
                                            <option value="Saudi Arabia"> Saudi Arabia </option>
                                            <option value="Senegal"> Senegal </option>
                                            <option value="Serbia"> Serbia </option>
                                            <option value="Seychelles"> Seychelles </option>
                                            <option value="Sierra Leone"> Sierra Leone </option>
                                            <option value="Singapore"> Singapore </option>
                                            <option value="Sint Maarten"> Sint Maarten </option>
                                            <option value="Slovakia"> Slovakia </option>
                                            <option value="Slovenia"> Slovenia </option>
                                            <option value="Solomon Islands"> Solomon Islands </option>
                                            <option value="Somalia"> Somalia </option>
                                            <option value="South Africa"> South Africa </option>
                                            <option value="South Georgia and South Sandwich Islands"> South Georgia and South Sandwich Islands </option>
                                            <option value="South Korea"> South Korea </option>
                                            <option value="South Sudan"> South Sudan </option>
                                            <option value="Spain"> Spain </option>
                                            <option value="Sri Lanka"> Sri Lanka </option>
                                            <option value="St. Barth�lemy"> St. Barth�lemy </option>
                                            <option value="St. Helena"> St. Helena </option>
                                            <option value="St. Kitts and Nevis"> St. Kitts and Nevis </option>
                                            <option value="St. Lucia"> St. Lucia </option>
                                            <option value="St. Martin"> St. Martin </option>
                                            <option value="St. Pierre and Miquelon"> St. Pierre and Miquelon </option>
                                            <option value="St. Vincent and Grenadines"> St. Vincent and Grenadines </option>
                                            <option value="Sudan"> Sudan </option>
                                            <option value="Suriname"> Suriname </option>
                                            <option value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen </option>
                                            <option value="Swaziland"> Swaziland </option>
                                            <option value="Sweden"> Sweden </option>
                                            <option value="Switzerland"> Switzerland </option>
                                            <option value="Syria"> Syria </option>
                                            <option value="Taiwan"> Taiwan </option>
                                            <option value="Tajikistan"> Tajikistan </option>
                                            <option value="Tanzania"> Tanzania </option>
                                            <option value="Thailand"> Thailand </option>
                                            <option value="Timor-Leste"> Timor-Leste </option>
                                            <option value="Togo"> Togo </option>
                                            <option value="Tokelau"> Tokelau </option>
                                            <option value="Tonga"> Tonga </option>
                                            <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                            <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                            <option value="Tunisia"> Tunisia </option>
                                            <option value="Turkey"> Turkey </option>
                                            <option value="Turkmenistan"> Turkmenistan </option>
                                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                            <option value="Tuvalu"> Tuvalu </option>
                                            <option value="U.S. Virgin Islands"> U.S. Virgin Islands </option>
                                            <option value="Uganda"> Uganda </option>
                                            <option value="Ukraine"> Ukraine </option>
                                            <option value="United Arab Emirates"> United Arab Emirates </option>
                                            <option value="United Kingdom"> United Kingdom </option>
                                            <option value="United States"> United States </option>
                                            <option value="Uruguay"> Uruguay </option>
                                            <option value="Uzbekistan"> Uzbekistan </option>
                                            <option value="Vanuatu"> Vanuatu </option>
                                            <option value="Vatican City"> Vatican City </option>
                                            <option value="Venezuela"> Venezuela </option>
                                            <option value="Vietnam"> Vietnam </option>
                                            <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                            <option value="Western Sahara"> Western Sahara </option>
                                            <option value="Yemen"> Yemen </option>
                                            <option value="Zambia"> Zambia </option>
                                            <option value="Zimbabwe"> Zimbabwe </option>
                                        </select>
                                    </div>
                                </div>
                                <br/>

                                <div className="form-group">
                                    <div className="col-md-6">
                                        <input className="form-control"
                                               onChange={(event) => this.handleUserInput(event)}
                                               value={this.state.password} name="password"
                                               placeholder="ENTER PASSWORD" type="password" required/>
                                    </div>

                                    <div className="col-md-6">
                                        <input className="form-control"
                                               onChange={(event) => this.handleUserInput(event)}
                                               value={this.state.confirmPassword} name="confirmPassword"
                                               placeholder="REPEAT PASSWORD" type="password" required/></div>
                                </div>
                                <br/>

                                <div className="row text-center">
                                    <p className="action-btn"><a className="btn btn-primary" onClick={this.formSubmitted }>Update</a></p>
                                </div>


                                {/* <div className="form-group">
                            <button className="btn btn-primary" type="submit">create account</button>
                            <p className="text-center">already have an account ? <a href="login.php">Login</a></p>
                        </div>*/}


                            </form>

                        </div>
                    </div>


                </div>





            </div>
        )

    }
}


function mapStateToProps(state) {

    return{
        auth: state.auth,
    }
}

function matchDispatchToProps(dispatch){
    return {

        loginUser(email, password){
            dispatch(authActions.loginUser(email, password))
        }

    }
}
export default connect(mapStateToProps, matchDispatchToProps)(Editprofile);




