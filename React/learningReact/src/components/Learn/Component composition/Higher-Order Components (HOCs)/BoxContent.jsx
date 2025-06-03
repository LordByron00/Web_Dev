export default function BoxContent({header, main, footer}) {
    return(
        <>
            <p>{header}</p>
            <p>{main}</p>
            <p>{footer}</p>
        </>
    );
}