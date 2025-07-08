import { useState } from "react";

function useCOunter(count, setCount) {
    const [count, setCount] = useState(count, setCount);
    setCount(()=> count + 1);
    return count;
}

export default useCOunter;