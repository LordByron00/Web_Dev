import React, {useState} from 'react'

export const TodoForm = ({addTodo}) => {
  const [value, setValue] = useState("");
  const hadleSubmit = (e) => {
    e.preventDefault();
    if (value !== '') {
      addTodo(value);
      setValue("");
    }
  }

  return (
    <form className='TodoForm' onSubmit={hadleSubmit}>
      <input className='todo-input' placeholder='What is the task today?' value={value} onChange={(e) => {
        setValue(e.target.value);
      }} required/>
      <button type='submit' className='todo-btn'>Add Task</button>
    </form>
  )
}
