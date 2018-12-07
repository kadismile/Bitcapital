import * as type from '.././_constants/ActionTypes'


const initialState = {
    isAuthenticated: false,
    id: 0,
    image: '',
    email: '',
    first_name: '',
    last_name: '',
    phone: '',
    username: '',
    sex: '',
    country: '',

};




//REDUCER
export default function authReducer(state=initialState, action){

    switch(action.type) {

        case type.IS_AUTHENTICATED: {

            return {
                ...state,
                isAuthenticated: true,
                id: action.user.id,
                image:'',
                email:action.user.email,
                first_name:action.user.first_name,
                last_name:action.user.last_name,
                phone:action.user.phone,
                username:action.user.username,
                sex:action.user.sex,
                country:action.user.country,

            }
        }

        case type.IS_LOGGED_OUT: {
            return {
                ...state,
                isAuthenticated: false,
                id: 0,
                image: '',
                email: '',
                first_name: '',
                last_name: '',
                phone: '',
                username: '',
                sex: '',
                country: '',
            }

        }

        default: return state
    }
}