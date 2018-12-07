import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch, Redirect, } from 'react-router-dom'
import { createStore, applyMiddleware, compose } from 'redux';
import rootReducer from './_reducers'
import thunk from 'redux-thunk'
import {Provider} from 'react-redux'
import '../../css/app.css'
import Home from './Home'
import Header from './Header'
import Register from './Register'
import Login from './Login'
import Nomatch from './Nomatch'
import Profile from "./Profile";
import Editprofile from "./EditProfile";

class App extends Component {

    componentDidMount(){
        localStorage.setItem('reduxState', JSON.stringify(store.getState()))
    }

    render () {
        const authenticated  = store.getState().auth.isAuthenticated;
        return (
            <BrowserRouter>
                <div>
                    <Route render={(props) => <Header {...props}/> }/>
                    <Switch>
                        <Route path="/" exact render={(props) => <Home  {...props}/> }/>
                        <Route path="/login" exact render={(props) => <Login  {...props}/> }/>

                        <Route path="/register" exact render={(props) => <Register  {...props}/> }/>


                        <Route path="/profile" render={(props) => (
                            authenticated
                                ? <Profile {...props} />
                                : <Redirect to='/login' />
                        )}
                        />

                        <Route path="/edit" render={(props) => (
                            authenticated
                                ? <Editprofile {...props} />
                                : <Redirect to='/login' />
                        )}
                        />

                        <Route path='*' component={Nomatch} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}



const persistedState = localStorage.getItem('reduxState') ? JSON.parse(localStorage.getItem('reduxState')) : {};
const store = createStore(rootReducer, persistedState, compose(
    applyMiddleware(thunk),
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
));

store.subscribe(() => {
    localStorage.setItem('reduxState', JSON.stringify(store.getState()))
});


//ReactDOM.render(<App />, document.getElementById('app'));