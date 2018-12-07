import React, { Component } from 'react'
import {Link} from 'react-router-dom'
import {connect} from 'react-redux'

class Profile extends Component {

    render(){
        const {auth} = this.props;
        return(
            <div>

                <section className="facts">

                    <div className="container">

                        <div className="row text-center facts-content">
                            <div className="text-center heading-facts">

                                <h4> <img id="about-us" className="img-responsive img-about-us" src="images/user.png" style={{width: '10%'}} alt="about us"/>
                                    <span> {auth.username}! </span></h4>
                                <p>leading cryptocurrency exchange since day one of Bitcoin distribution</p>
                            </div>

                            <div className="col-xs-12 col-md-3 col-sm-6 fact">
                                <h3>$77.45B</h3>
                                <h4>market cap</h4>
                            </div>

                            <div className="col-xs-12 col-md-3 col-sm-6 fact fact-clear">
                                <h3>165k</h3>
                                <h4>daily transactions</h4>
                            </div>

                            <div className="col-xs-12 col-md-3 col-sm-6 fact">
                                <h3>1726</h3>
                                <h4>active accounts</h4>
                            </div>

                            <div className="col-xs-12 col-md-3 col-sm-6">
                                <h3>17</h3>
                                <h4>years on the market</h4>
                            </div>

                            <div className="col-xs-12 buttons">

                                <Link className="btn btn-primary btn-pricing" to={{pathname: `/edit`}} >Edit Account</Link>
                                <span className="or"> || </span>
                                <a className="btn btn-primary btn-register" href="register.html">Fund Account</a>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        )
    }
}
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
export default connect(mapStateToProps, matchDispatchToProps)(Profile);

