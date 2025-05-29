import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import MyButton  from './components/MyButton';
import Profile from '../Learn/profile';
import LoginForm from './components/loginForm';

function App() {
  const [count, setCount] = useState(0)
  const authenticated = true;

  return (
    <>
    <div>
      <div className='header'>
        {authenticated ? <Profile /> : <LoginForm/>}
      </div>
      <h2>Learning react from scratch</h2>
      <p>{count}</p>
      <MyButton setCounter={setCount} count={count}/>
    </div>
    </>
  )
}

export default App
