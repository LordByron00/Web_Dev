/* secret-messages.js */
import { default as DOMFunctions } from "./dom-function.js";

const { toggleHiddenElement, changeToFunkyColor} = DOMFunctions;
const buttonElement = document.getElementById('secret-button');
const pElement = document.getElementById('secret-p');

buttonElement.addEventListener('click', () => {
    toggleHiddenElement(pElement);
    changeToFunkyColor(pElement);
});