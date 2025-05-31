import { useState } from "react";

const PreventForm = () => {
    const [name, setName] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        alert('Form submitted without reload!');
        alert(`Name: ${name}`);
        console.log('Form submitted without reload!');
    }

    const handleNameChange = (e) => {
        setName(e.target.value);
    }

    return(
        <form onSubmit={handleSubmit}>
            <label htmlFor="name">Name:</label>
            <input type="text" name="name" id="namee" value={name} onChange={handleNameChange}/>
            <button type="submit">Submit</button>
        </form>
    );
}

export default PreventForm;