import { useState } from "react";

const PreventForm = () => {
    const [name, setName] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();

        if (name.trim() === '') return;

        alert('Form submitted without reload!');
        alert(`Name: ${name}`);
        console.log('Form submitted without reload!');
        setName('');
    }

    const handleNameChange = (e) => {
        setName(e.target.value);
    }

    const handleKeyDown = (e) => {
        if (e.key === 'Enter') {
            alert('ENTER IS PRESSED');
        }
    }

    return(
        <form onSubmit={handleSubmit}>
            <label htmlFor="name">Name:</label>
            <input type="text" name="name" id="namee" value={name} onChange={handleNameChange} onKeyDown={handleKeyDown}/>
            <button type="submit">Submit</button>
        </form>
    );
}

export default PreventForm;