const PreventForm = () => {
    const handleSubmit = (e) => {
        e.preventDefault();
        alert('Form submitted without reload!');
        console.log('Form submitted without reload!');
    }

    return(
        <form onSubmit={handleSubmit}>
            <button type="submit">Submit</button>
        </form>
    );
}

export default PreventForm;