export default function InlineBox({isActive}) {
    const style = {
        backgroundColor: isActive? 'green' : 'gray',
        padding: '10px',
        color: 'white',
    };

    return(
       <div style={style}>This is an inline-syled box.</div>
    );
};