import styled from "styled-components";

export const StyledButton = styled.button`
    background: ${prop => prop.primary ? 'blue' : 'gray'};
    color: white;
    padding: 15px;
    border-radius: 5px;

    &:hover {
        background: ${prop => prop.primary ? 'darkblue' : 'darkgray'};
    }
`;