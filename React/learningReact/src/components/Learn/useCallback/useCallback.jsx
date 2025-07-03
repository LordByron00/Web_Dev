import { useCallback } from "react";

const UseCallBack = () => {

    const handleClick = useCallback(() => {
        console.log('useCallback button, the function itself is memozied or cached, it is not recreated every time it is used!');
    }, []);

    return(
        <>
            <h1>useCallbasdasdasck</h1>
            <button onClick={handleClick}>useCallBack Button</button>
        </>
    );
}

export default UseCallBack;