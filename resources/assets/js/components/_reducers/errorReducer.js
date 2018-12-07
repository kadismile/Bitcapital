import * as type from '.././_constants/ActionTypes'


const initialState = {
   error: false,

};




//REDUCER
export default function authReducer(state=initialState, action){

    switch(action.type) {

        case type.IS_ERROR: {

            return {
                ...state,
                error: true,

            }
        }


        case type.IS_AUTHENTICATED: {

            return {
                ...state,
                error: false,

            }
        }


        default: return state
    }
}