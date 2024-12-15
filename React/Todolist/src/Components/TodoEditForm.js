import React, {useState} from 'react'


export const TodoEditForm = ({task, editTodo, updateTodo}) => {
  const [value, setValue] = useState("");
  const hadleSubmit = (e) => {
    e.preventDefault();
    if (value !== "") {
      updateTodo(task.id, value)
      setValue("")
    } 
  }

  const cancelEdit = id => {
    editTodo(task.id);
  }

  return (
    <form className='TodoForm' onSubmit={hadleSubmit}>
      <input className='todo-input' placeholder={task.task} onChange={(e) => {
        setValue(e.target.value);
      }} />
      <button type='button' className='todo-btn' onClick={cancelEdit}>Cancel</button>
      <button type='submit' className='todo-btn'>Update Task</button>
    </form>
  )
}
