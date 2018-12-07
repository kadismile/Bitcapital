import React from 'react'
import {Link} from 'react-router-dom'

const Footer = () => (

    <div className="wrapper" style={{paddingTop: "140px"}}>
        <div className="container-fluid error">
            <div>
                <div className="text-center">



                    <div className="big-404" style={{fontSize: '200px'}}>404</div>
                    <br/>
                    <br/>
                    <h3>oops ! ... Page not found</h3>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>


                    <Link to={{pathname: "/"}} className="btn btn-primary">homepage</Link>

                </div>
            </div>
        </div>
    </div>
    
    
);

export default Footer