import { useState } from "react";

export default function SignupForm({formData, setFormdata, logged, setLogged}) {
    const [formError, setfromError] = useState('');

    //Learning more about JS Object iterations
    const iterations = () => {
        Object.entries(formData).forEach(([key, value]) => {
            console.log(`key: ${key} value: ${value}`);
        });

        const MappedForm = Object.fromEntries(Object.entries(formData).map(([key, value]) => (
            [key, value.toUpperCase()]
        )));

        console.log(formData);
        console.log(MappedForm);

        Object.keys(MappedForm).forEach((key) => {
            console.log(`key: ${key}`)
        });
        
        Object.values(MappedForm).forEach((value) => {
            console.log(`value: ${value}`)
        });
        

    }

    const handleSubmit = (e) => {
        e.preventDefault();
        const isFormEmpty = Object.values(formData).some(value => value.trim() === "");
        if (isFormEmpty) {
            setfromError('Fill all the input fields!');
            return;
        }
        setLogged(true)
        iterations();
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