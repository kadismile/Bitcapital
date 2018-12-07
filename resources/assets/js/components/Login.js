import React, { Component } from 'react'
import {Link, Redirect} from 'react-router-dom'
import {connect} from 'react-redux'
import {authActions} from './_actions/authActions'
import axios from 'axios'

class Login extends Component {

    constructor (props) {
        super(props);
        this.state = {
            email: '',
            password: '',
            error: false
        };
        this.formSubmitted = this.formSubmitted.bind(this);
        this.handleUserInput = this.handleUserInput.bind(this);
    }

    formSubmitted(e,){
        e.preventDefault();
        this.props.loginUser(this.state.email, this.state.password);
        this.setState({email: '', password: ''});


        setTimeout(() => {
            if(this.props.error.error === false){
                window.location = "http://localhost:8000/profile";
            }
        }, 2500)


    }

    handleUserInput (e) {
        const name = e.target.name;
        const value = e.target.value;
        this.setState({[name]: value});
    }

    render(){
        console.log(this.props.error.error)
        return (
            <div className="container-fluid user-auth">
                <div className="hidden-xs col-sm-4 col-md-4 col-lg-4">



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
                                        <footer><span>Rawia Chniti</span>, Russia</footer>
                                    </blockquote>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div className="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                    <div className="form-container">
                        <div>

                            <div className="row text-center">
                                <h2 className="title-head hidden-xs">member <span>login</span></h2>

                                { this.props.error.error ? <p className="info-form" style={{color:'red'}}>
                                    Invalid Email Or Password</p> : ''}
                            </div>


                            <form>

                                <div className="form-group">
                                    <input className="form-control" name="email"
                                           id="email" placeholder="EMAIL" type="email"
                                           onChange={(event) => this.handleUserInput(event)}
                                           value={this.state.email}
                                    />
                                </div>

                                <div className="form-group">
                                    <input className="form-control"
                                           name="password" id="password" placeholder="PASSWORD"
                                           type="password"
                                           onChange={(event) => this.handleUserInput(event)}
                                           value={this.state.password}
                                    />
                                </div>

                                <div className="form-group">
                                    <button className="btn btn-primary" type="submit" onClick={this.formSubmitted }>login</button>
                                    <p className="text-center">don't have an account ? <Link to={{pathname: "/register"}} >register now</Link></p>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        )
    }



};
function mapStateToProps(state) {

    return{
        auth: state.auth,
        error: state.error
    }
}

function matchDispatchToProps(dispatch){
    return {

        loginUser(email, password){
            dispatch(authActions.loginUser(email, password))
        }

    }
}
export default connect(mapStateToProps, matchDispatchToProps)(Login);




