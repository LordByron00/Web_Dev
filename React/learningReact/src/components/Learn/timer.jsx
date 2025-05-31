import { useEffect, useState } from "react";

const Timer = () => {
    const [timer, setTimer] = useState(false);
    const [time, setTime] = useState(0);

    function handleTimer() {
        setTimer((prev) => !prev);
    }

    function updateTime() {
        setTime((prev) => prev + 1);
    }


    useEffect(() => {
        let interval = null;

        if (timer) { 
            interval = setInterval(updateTime, 1000)
        } else { 
            clearInterval(interval)
        }

        return() => {
            clearInterval(interval);
        }
    }, [timer]);


    return(
        <>
        <p>{time}</p>
        <button type="button" onClick={handleTimer}>{timer ? 'Stop' : 'Start'}</button>
        </>
    );
}

export default Timer;