export default function LoginForm() {
    return (
        <>
            <form action="">
                <label htmlFor="email">Email: </label>
                <input type="text" name="email" id="email" /><br />
                <label htmlFor="password">Password: </label> 
                <input type="text" name="password" id="password" /><br />
                <input type="submit" value="login" />
            </form>
        </>
    );
}