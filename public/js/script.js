// menu-lateral
const openMenuLateral = document.querySelector('#openMenuLateral');
const closeMenuLateral = document.querySelector('#closeMenuLateral');
const fundoMenuLateral = document.querySelector('#fundoMenuLateral');
const menuLateral = document.querySelector('#menuLateral');

const toggleMenuLateral = () => {
    fundoMenuLateral.classList.toggle('menuHide');
    menuLateral.classList.toggle('menuHide');
}

[openMenuLateral, closeMenuLateral].forEach((el) => {
    el.addEventListener('click', () => toggleMenuLateral())
})
// menu-lateral fim