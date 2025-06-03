import { useRef } from "react";

export default function UseRefTimer() {
    const useRefTime = useRef(0);

    const setTimer = () => {
        setInterval(() => {
            useRefTime.current += 1;
        }, 1000);
    }

    return(
        <>
            <p>TIMER</p>
            <p>UseRef Time: {useRefTime.current}</p>
            <button type="button" onClick={() => setTimer()}>Start</button>
        </>
    );
}