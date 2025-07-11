import UseTimer from './Timer';

const TimerApp = () => {
    const { time, isActive, isPaused, start, pause, resume, reset } = UseTimer(0);

    return(
        <>
            <p>{time}</p>
            {!isActive && (
                <button onClick={start}>Start</button>
            )}
            {isActive && !isPaused && (
                <button onClick={pause}>pause</button>
            )}
            {isActive && isPaused && (
                <button onClick={resume}>resume</button>
            )}
            {isActive && (
                <button onClick={reset}>reset</button>
            )}
        </>
    );
}

export default TimerApp;