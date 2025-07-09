import { useState } from "react";

function useCounter(initialCount = 0) {
    const [count, setCount] = useState(initialCount);

    const increment = () => { 
        setCount(prev => prev + 1);
    }

    return {count, increment};
}

export default useCounter;