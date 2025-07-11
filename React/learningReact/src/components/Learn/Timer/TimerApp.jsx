import UseTimer from './Timer';

const TimerApp = () => {
    const { time, isActive, isPaused, start, pause, resume, reset } = UseTimer(0);

    return(
        <>
            <p>{time}</p>
            <button onClick={start}>Start</button>
            <button onClick={pause}>pause</button>
            <button onClick={resume}>resume</button>
            <button onClick={reset}>reset</button>
        </>
    );
}

export default TimerApp;