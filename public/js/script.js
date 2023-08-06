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

// slider
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
// slider fim