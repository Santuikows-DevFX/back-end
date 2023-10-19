import { Navigate } from "react-router-dom"
import { useStateContext } from "../Context/ContextAPI"

export default function Student() {

    const{token} = useStateContext()

    if(token && localStorage.getItem('USER_ROLE') != 'student') {
        return <Navigate to="/unauthorized" />

    }

    return(

        <div>
            Student Dashboard
        </div>

    )

}