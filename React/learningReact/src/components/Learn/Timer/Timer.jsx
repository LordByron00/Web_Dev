import { useEffect, useState, useCallback } from "react";

function UseTimer (initialTime = 0) {
    const [time, setTime] = useState(initialTime)
    const [isActive, setActive] = useState(false);
    const [isPaused, setPause] = useState(false);
    
    useEffect(() => {
        let interval = null

        if (isActive && !isPaused) {
            interval = setInterval(() => setTime(prev => prev + 1), 1000);
        } else {
            clearInterval(interval);
        }

        return () => {
            clearInterval(interval);
        }

    }, [isActive, isPaused]);

    const start = useCallback( () => {
        setActive(true);
        setPause(false);
    }, []);

    const pause =useCallback( () => {
        setPause(true);
        console.log('paused!')
    }, []);

    const resume = useCallback(() => {
        setPause(false);
    }, [])

    const reset = useCallback(() => {
        setTime(0)
        setActive(false);
    }, [])

    return {time, isActive, isPaused, start, pause, resume, reset};
}

export default UseTimer;