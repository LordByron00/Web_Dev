import { useState } from "react";

function useCounter(initialCount = 0) {
    const [useCounterCount, setCount] = useState(initialCount);

    const useCounterIncrement = () => { 
        setCount(prev => prev + 1);
    }

    return {useCounterCount, useCounterIncrement};
}

export default useCounter;