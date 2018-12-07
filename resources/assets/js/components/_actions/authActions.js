import * as type from '../_constants/ActionTypes'
import axios from 'axios'
export const authActions = {
    customerDetails(user, cookie){
        console.log(cookie);
        if(user.id){
            return {
                type: type.IS_AUTHENTICATED,
                user,
                cookie
            }
        }
    },


    UserDetails(user){
        return {
            type: type.IS_AUTHENTICATED,
            user
        }
    },

    logoOut(){
        return {
            type: type.IS_LOGGED_OUT,
        }
    },

    Error(){
        return {
            type: type.IS_ERROR,
        }
    },


    loginUser(email, password){
        return dispatch => {
            let form = new FormData();
            form.append("email", email);
            form.append("password", password);

            let settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://bitechcapital.com/api/login",
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
                dispatch(this.UserDetails(response.data.body))
            }).catch((error) => {
                console.log(error);
                dispatch(this.Error())


            });
        }
    },




    signout() {
        return dispatch => {
            let settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://bitechcapital.com/api/logout",
                "method": "GET",
                "headers": {
                    "cache-control": "no-cache",
                }
            };
            axios(settings).then((response) => {
                dispatch(this.logoOut())
            }).catch((error) => {
                console.log(error);
            });
        }
    },







};