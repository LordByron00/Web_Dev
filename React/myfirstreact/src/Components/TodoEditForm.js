import React, {useState} from 'react'


export const TodoEditForm = ({task, updateTodo}) => {
  const [value, setValue] = useState("");
  const hadleSubmit = (e) => {
    e.preventDefault();
    updateTodo(task.id, value);
    setValue("");
  }

  return (
    <form className='TodoForm' onSubmit={hadleSubmit}>
      <input className='todo-input' placeholder={task.task} onChange={(e) => {
        setValue(e.target.value);
      }}/>
      <button type='submit' className='todo-btn'>Update Task</button>
    </form>
  )
}
