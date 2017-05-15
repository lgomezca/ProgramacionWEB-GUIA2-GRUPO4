/*Función para cambiar estilo y presentacion de menu al reducir tamaño de pantalla*/
var btnMenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');

btnMenu.addEventListener('click', function() {
    nav.classList.toggle('mostrar');
})