import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import {connect} from 'react-redux'
import {authActions} from './_actions/authActions'
class Header extends Component {


    constructor (props) {
        super(props);
        this.logout = this.logout.bind(this);
    }

    logout(){
        this.props.signout();
    }
    render() {
        console.log(this.props.auth.isAuthenticated);
      return  (
          <header className="header">
            <div className="container">
                <div className="row">

                    <div className="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="/">
                            <img id="logo" className="img-responsive" src="images/logo-dark.png" alt="logo"/>
                        </a>
                    </div>

                    <div className="col-md-7 col-lg-7">
                        <ul className="unstyled bitcoin-stats text-center">
                            <li><h6>9,450 USD</h6><span>ETH</span></li>

                            <li><h6>+5.26%</h6><span>DASH</span></li>

                            <li> <h6>12.820 BTC</h6><span>XRP</span></li>
                            <li><h6>2,231,775</h6><span>XLM</span></li>

                            <li><h6>2,231,775</h6><span>BTC</span></li>

                            <li>
                                <div className="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>

                    <div className="col-md-3 col-lg-3">
                        <ul className="unstyled user">

                            {
                                this.props.auth.isAuthenticated ?
                                    <li className="sign-in"><Link to={{pathname: "/"}} onClick={this.logout} className="btn btn-primary"><i className="fa fa-user"></i> logout </Link></li> :
                                    <li className="sign-in"><Link to={{pathname: "/login"}} className="btn btn-primary"><i className="fa fa-user"></i> sign in</Link></li>
                            }


                            {
                                this.props.auth.isAuthenticated ? <li className="sign-in"><Link to={{pathname: "/profile"}} className="btn btn-primary"><i className="fa fa-user"></i> Account </Link></li> :
                                    ''
                            }


                            {
                                this.props.auth.isAuthenticated ? '' :
                                    <li className="sign-in"><Link to={{pathname: "/register"}} className="btn btn-primary"><i className="fa fa-user-plus"></i> register</Link></li>
                            }



                        </ul>
                    </div>

                </div>
            </div>

            <nav className="site-navigation navigation" id="site-navigation">
                <div className="container">
                    <div className="site-nav-inner">

                        <a className="logo-mobile" href="/">
                            <img id="logo-mobile" className="img-responsive" src="assets/images/logo-dark.png" alt=""/>
                        </a>

                        <button type="button" className="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span className="sr-only">Toggle navigation</span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                        </button>

                        <div className="collapse navbar-collapse navbar-responsive-collapse">

                            <ul className="nav navbar-nav">
                                <li className="active"><a href="/">Home</a></li>
                                <li><a href="buysell.php">BUY/SELL</a></li>
                                <li><a href="about.html">MARKET DATA</a></li>
                                <li><a href="services.html">MARGIN TRADINGS</a></li>
                                <li><a href="pricing.html">AFFILIATE</a></li>

                            </ul>

                        </div>
                    </div>
                </div>

                <div className="site-search">
                    <div className="container">
                        <input type="text" placeholder="type your keyword and hit enter ..."/>
                        <span className="close">×</span>
                    </div>
                </div>

            </nav>

        </header>)
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
        },

        signout(){
            dispatch(authActions.signout())
        }

    }
}
export default connect(mapStateToProps, matchDispatchToProps)(Header);