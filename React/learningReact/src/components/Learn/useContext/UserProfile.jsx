import { useContext } from "react";
import UserContext from "./UserContext";

export default function UserProfile() {
    const {name, email, password} = useContext(UserContext);
    return(
        <div>
            <img src="/src/assets/images/Chrollo.jpg" alt="Chrollo"/>
            <p>{name}</p>
            <p>{email}</p>
            <p>{password}</p>
        </div>
    );
}