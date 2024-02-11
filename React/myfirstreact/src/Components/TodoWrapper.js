import React, {useState, useEffect} from 'react'
import { TodoForm } from './TodoForm'
import {v4 as uuidv4} from 'uuid';
import { Todo } from './Todo';
import { TodoEditForm } from './TodoEditForm';
uuidv4();

export const TodoWrapper = () => {
  const [todos, setTodos] = useState([]);

  useEffect(() => {
    console.log("Updated state:", todos);
  }, [todos]);;

  const addTodo = todo => {
    setTodos([...todos, {id: uuidv4(), task: todo, completed: false, isEditing: false}]);
  }

  const toggleComplete = id => {
    setTodos(todos.map(todo => todo.id === id ? {...todo, completed: !todo.completed} : todo))
  }
  
  const editTodo = id => {
    setTodos(todos.map(todo => todo.id === id ? {...todo, isEditing: !todo.isEditing} : todo))
  }

  const deleteTodo = id => {
    setTodos(todos.filter(todo => todo.id !== id));
  }

  const updateTodo = (id, value) => {
    setTodos(todos.map(todo => todo.id === id ? {...todo, task: value, isEditing: !todo.isEditing} : todo))
  }

  return (
    <div className='TodoWrapper'>
      <h1>Get things done</h1>
      <TodoForm addTodo={addTodo}/>
      {todos.map((todo, index) => (
        todo.isEditing ? <TodoEditForm task={todo} key={index} updateTodo={updateTodo} /> : <Todo task={todo} key={index} toggleComplete={toggleComplete} editTodo={editTodo} deleteTodo={deleteTodo}/>
      ))}
    </div>
  )
}
