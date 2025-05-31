const AlertButton = ({person}) => {

    const handleclick = (name) => {
        alert('Button is clicked! ' + name);
        console.log('Button is clicked');
    }

    return (
        <>
            <p>Named function Alert Button</p>
            <button type="button" onClick={() => handleclick('Justine named person')}>Alert</button>
            <p>Inline Alert Button</p>
            <button type="button" onClick={() => alert(`Inline: Button is clicked by ${person}`)}>Alert</button>
        </>
    );

}

export default AlertButton;