import { useState } from "react";

const Timer = (initialTime = 60) => {
    const [time, setTime] = useState(initialTime)
    
    function setTimer() {
        setTime(prev => prev - 1);
    }

    return {time, setTimer}
}

export default Timer;