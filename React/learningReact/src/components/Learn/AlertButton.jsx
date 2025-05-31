const AlertButton = () => {

    const handleclick = () => {
        alert('Button is clicked!');
        console.log('Button is clicked');
    }

    return (
        <>
            <p>Named function Alert Button</p>
            <button type="button" onClick={handleclick}>Alert</button>
            <p>Inline Alert Button</p>
            <button type="button" onClick={() => alert('Inline: Button is clicked.')}>Alert</button>
        </>
    );

}

export default AlertButton;