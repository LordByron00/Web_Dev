export default function MyButton({setCounter, count}) {
    return (
        <button onClick={() => setCounter(count + 1 )}>Set Count</button>
    );
}