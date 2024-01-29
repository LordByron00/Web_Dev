/* secret-image.js */
import DOMFunctions from './dom-function.js';

const { toggleHiddenElement, changeToFunkyColor} = DOMFunctions;

const buttonElement = document.getElementById('secret-button');
const imgElement = document.getElementById('secret-img');


buttonElement.addEventListener('click', () => {
  toggleHiddenElement(imgElement);
  changeToFunkyColor(imgElement);
});