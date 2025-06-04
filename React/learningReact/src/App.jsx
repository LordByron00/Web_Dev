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
import Button from './components/Learn/StyledButton/Button';
import CardWithChildren from './components/Learn/Component composition/Children Prop/Card';
import Page from './components/Learn/Component composition/Slots (Named Composition)/Page';
import Datafetcher from './components/Learn/Component composition/Component Injection (Render Props)/Datafetcher';
import BoxBorder from './components/Learn/Component composition/Higher-Order Components (HOCs)/BoxBorder';
import BoxContent from './components/Learn/Component composition/Higher-Order Components (HOCs)/BoxContent';
import UseRefTimer from './components/Learn/useRef/TimerUseRef';
import SignupForm from './components/Learn/FormHandling/SignupForm';
import UserContext from './components/Learn/useContext/UserContext'
import UserProfile from './components/Learn/useContext/UserProfile';

function App() {
  const [count, setCount] = useState(0)
  const [name, setname] = useState('Justine S. Bayron')
  const PaddedBox = BoxBorder(BoxContent);
  const [formData, setFormdata] = useState({name: '', email: '', password: ''});
  const [logged, setLogged] = useState(false);
  // const [user, setUser] = useState({ name: '', role: ''});

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
      <h1>Learning react from scratch</h1><br />
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
      <Button buttonName={'Styled Button'} primary={true} setCount={setCount} count={count}></Button>
      <Button buttonName={'Styled Button'} primary={false} setCount={setCount} count={count}></Button>
      <CardWithChildren>
        <img src="/src/assets/images/Will.png" alt="Chrollo Lucilfer"/>
        <h1>Chrollo Lucilfer</h1>
        <p>This is a card with a children props.</p>
      </CardWithChildren>
      <Page 
        headerContent={<h1>Justine S. Bayron</h1>} 
        mainContent={<p>He is a professional hacker that hacked the Philippine government due to frustration of corruptions leaving a quote he dies only after death of humanity.
          He is a professional hacker that hacked the Philippine government due to frustration of corruptions leaving a quote he dies only after death of humanity.
          He is a professional hacker that hacked the Philippine government due to frustration of corruptions leaving a quote he dies only after death of humanity.
          He is a professional hacker that hacked the Philippine government due to frustration of corruptions leaving a quote he dies only after death of humanity.
        </p>} 
        footerContent={<p>© 2025</p>}
      />
      <Datafetcher render={(data) => <p>This is a fetched data: {data.name + " " + data.surname}</p>}></Datafetcher>
      <PaddedBox 
      header={'Higher-Order Component'} 
      main={'HOCs are a more functional way to compose behavior, often used for things like auth, theming, etc. You wrap components to enhance them. Just like this one which is wrapped by another component to have a certain style like border and padding'} 
      footer={'This is confusing so you can use children and props instead'}/>
      <UseRefTimer></UseRefTimer>
      <SignupForm formData={formData} setFormdata={setFormdata} logged={logged} setLogged={setLogged}></SignupForm>
      { logged && 
        <UserContext.Provider value={formData}>
            <UserProfile />
        </UserContext.Provider>
      }
    </div>
    </>
  )
}

export default App
