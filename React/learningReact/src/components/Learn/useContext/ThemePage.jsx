import { useContext } from 'react'; // ✅ Correct
import ThemeContext from './ThemeContext';

const ThemePage = () => {
    const { theme, setTheme } = useContext(ThemeContext);
    return (
        <div style={{background: theme == 'dark' ? '#222' : '#fff', color: theme == 'dark' ? '#fff' : '#222'}}>
            <p>Change Theme:</p>
            <button onClick={() => {setTheme(theme == 'dark' ? 'light' : 'dark')}}>Toggle Theme</button>
        </div>
    );
}

export default ThemePage;