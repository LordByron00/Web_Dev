import { useEffect, useState } from 'react'
// import reactLogo from './assets/react.svg'
// import viteLogo from '/vite.svg'
import './App.css'
import MyButton  from './components/MyButton';
import Profile from './components/Learn/profile';
import LoginForm from './components/loginForm';
import CountButton from './components/CountButton';
import ProfileForm from './components/profileForm';
import AlertButton from './components/Learn/alertButton';
import PreventForm from './components/Learn/PreventForm';
import LiveInput from './components/Learn/LiveInput';
import TodoApp from './components/Learn/simpleTodoApp';
import Timer from './components/Learn/timer';
import InlineBox from './components/Learn/inlineStyledBox';
import Card from './components/Learn/Card/Card';

function App() {
  const [count, setCount] = useState(0)
  const [name, setname] = useState('Justine S. Bayron')

  const authenticated = true;

  useEffect(() => {
    function handleScroll() {
      console.log('Scrolled!');
    }

    window.addEventListener('scroll', handleScroll)

    return () => {
      window.removeEventListener('scroll', handleScroll);
    }

  }, []);

  return (
    <>
    <div>
      <h2>Learning react from scratch</h2>
      <div className='header'>
        {authenticated ? <Profile name={name}/> : <LoginForm/>}
      </div>
      <ProfileForm name={name} setname={setname}></ProfileForm>
      <p>This count state is shared by other components.</p>
      <p>{count}</p>
      <MyButton setCounter={setCount} count={count} name={'1'}/> <br /><br />
      <MyButton setCounter={setCount} count={count} name={'2'}/>
      <CountButton buttonName={'local Count Button 1'}></CountButton>
      <CountButton buttonName={'local Count Button 2'}></CountButton><br />
      <AlertButton person={'Justine'}></AlertButton>
      <PreventForm></PreventForm>
      <LiveInput></LiveInput>
      <TodoApp></TodoApp>
      <Timer></Timer>
      <InlineBox isActive={true}></InlineBox>
      <InlineBox isActive={false}></InlineBox>
      <Card></Card>
    </div>
    </>
  )
}

export default App
