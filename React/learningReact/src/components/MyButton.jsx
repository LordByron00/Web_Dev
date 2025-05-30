export default function MyButton({setCounter, count, name}) {
    return (
        <button onClick={() => setCounter(count + 1 )}>Global Count {name}</button>
    );
}