import { useState } from "react";

export default function SignupForm() {
    const [formData, setFormdata] = useState({name: '', email: '', password: ''});
    const [formError, setfromError] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        const isFormEmpty = Object.values(formData).some(value => value.trim() === "");
        if (isFormEmpty) {
            setfromError('Fill all the input fields!');
            return;
        }
        console.log(formData);
    }

    const handleChange = (e) => {
        setfromError('');
        const {name, value} = e.target;
        setFormdata( (prev) => ({...prev, [name]: value}));
    }

    return(
        <>
            <p>{formError}</p>
            <form onSubmit={handleSubmit}>
                <label htmlFor="name">Name:</label>
                <input type="text" name="name" value={formData.name} onChange={handleChange} /><br />
                <label htmlFor="name">Email:</label>
                <input type="email" name="email" value={formData.email} onChange={handleChange} /><br />
                <label htmlFor="name">Password:</label>
                <input type="password" name="password" value={formData.password} onChange={handleChange} /><br />
                <button type="submit">Sign up</button>
            </form>
        </>
    );
}