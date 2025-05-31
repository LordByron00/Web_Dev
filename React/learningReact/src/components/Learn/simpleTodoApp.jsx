import { useEffect, useState } from "react";

const TodoApp = () => {
    const [task, setTask] = useState('');
    const [tasks, setTasks] = useState([]);

    useEffect(() => {

        console.log(tasks);

    }, [tasks]);

    function removeTask(index) {
        setTasks(tasks.filter((_, i) => index !== i));
    }

    function addTask() {
        if (task.trim() === '') {
            return;
        }

        setTasks([...tasks, task]);
        setTask('');
    }

    function handleEnter(e) {
        if (e.key === 'Enter') {
            addTask();
        }
    }

    return (
        <>

        <ul>
            {tasks.map((task, index) => (
                <li key={index} onClick={() => removeTask(index)}>{task}</li>
            ))}
        </ul>

        <span>TASK:</span>
        <input type="text" name="task" id="task" value={task} onChange={e => setTask(e.target.value)} onKeyDown={handleEnter} /> <br />
        <input type="button" value="ADD TASK" onClick={addTask}/>

        </>
    );
}

export default TodoApp;