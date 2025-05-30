import { useState } from "react";

export default function CountButton({buttonName}) {
    const [count, setCount] = useState(0);
    return (
        <>
            <p>This has its own count state and reusable.</p>
            <p>{count}</p>
            <button type="button" onClick={() => setCount(count + 1)}>{buttonName}</button>
        </>
    );
}