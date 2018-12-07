import React from 'react'

const FormErrors = (props)=>{
    console.log(props.formErrors)
    return (

        <div className='formErrors'>
            {Object.keys(props.formErrors).map((fieldName, i) => {
                if(props.formErrors[fieldName].length > 0){
                    return (
                        <p key={i}>{fieldName} {formErrors[fieldName]}</p>
                    )
                } else {
                    return '';
                }
            })}
        </div>
    )


};
export default FormErrors