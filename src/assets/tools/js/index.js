const btnMenu = document.getElementById('btn-hamburguer');
const ltMenu = document.getElementById('nav');
const btnClose = document.getElementById('btn-close');
const bgMenu = document.getElementById('back__menu');
document.getElementById('back__menu').addEventListener('click', ocultar);
document.getElementById('nav').addEventListener('click', ocultar)

function ocultar(){
    ltMenu.classList.remove('mostrar')
    bgMenu.style.display = "none";
}

btnMenu.addEventListener('click', () =>{
    ltMenu.classList.toggle('mostrar')
    bgMenu.style.display = "block";
});

btnClose.addEventListener('click', ocultar);