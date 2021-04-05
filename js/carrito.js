document.addEventListener('DOMContentLoaded', event => {

});

const bCarrito = document.querySelector('.carrito1');

bCarrito.addEventListener('click', event => {
    const carritoContainer = document.querySelector('#carrito-container');

    if (carritoContainer.style.display == 'none') {
        carritoContainer.style.display = 'block';
    } else {
        carritoContainer.style.display = 'none';
    }
});