import { useState } from "react";

export default function ProfileForm({name, setname}) {

    const [tempName, settempName] = useState(name);

    return(
        <>
            <form action="">
                <label htmlFor="name">Name:</label>
                <input type="text" name="name" id="name" onChange={(e) => settempName(e.target.value)}/><br />
                <input type="button" value="Change name" onClick={() => setname(tempName)}/>
            </form>
        </>
    );
}