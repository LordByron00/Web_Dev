import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import MyButton  from './components/MyButton';
import Profile from '../Learn/profile';




function App() {
  const [count, setCount] = useState(0)

  return (
    <>
    <div>
      <div className='header'>
        <Profile />
      </div>
      <h2>Learning react from scratch</h2>
      <MyButton />
    </div>
    </>
  )
}

export default App
