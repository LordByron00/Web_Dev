import { useEffect, useState } from "react";

function useDebounce(value, delay = 500) {
    const [debounce, setDebounce] = useState(value, delay);

    useEffect(() => {
        const timer = setTimeout(() => setDebounce(value), delay);
        clearInterval(timer);
    }, [value, delay]);

    return debounce;
}

export default useDebounce;