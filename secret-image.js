/* secret-image.js */
import { toggleHiddenElement, changeToFunkyColor } from "./dom-function.js";

const buttonElement = document.getElementById('secret-button');
const imgElement = document.getElementById('secret-img');


buttonElement.addEventListener('click', () => {
  toggleHiddenElement(imgElement);
  changeToFunkyColor(imgElement);
});