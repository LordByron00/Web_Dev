import { useState } from "react"

const LiveInput = () => {
    const [text, setText] = useState('');

    function handleChange(e) {
        setText(e.target.value);
    }

    return(
        <>
        <p>Text length:{text.length}</p>
        <p>Text: {text}</p>
        <label htmlFor="text">Input:</label>
        <input type="text" value={text} onChange={handleChange} />
        </>
    );
}

export default LiveInput;