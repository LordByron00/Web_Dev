import { useState } from "react";

const Timer = (initialTime = 0) => {
    const [time, setTime] = useState(initialTime)
    const [isActive, setActive] = useState(false);
    const [isPaused, setPause] = useState(false);
    
    function setTimer() {
        let interval = setInterval(() => setTime(prev => prev + 1), 1000);
    }

    const start = () => {
        setActive(true);
        setPause(true);
    }

    const pause = () => {
        setActive(false);
        setPause(true);
    }

    const resume = () => {
        setActive(true);
        setPause(false);
    }

    const reset = () => {
        setTime(0)
        setActive(false);
    }

    return {time, setTimer, start, pause, resume, reset}
}

export default Timer;