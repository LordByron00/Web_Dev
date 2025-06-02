import { StyledButton } from "./StyledButton";

export default function Button({buttonName, primary, setCount, count}) {
    return(
        <StyledButton primary={primary} onClick={() => setCount(count + 1 )} count={count}>{buttonName}</StyledButton>
    );
}