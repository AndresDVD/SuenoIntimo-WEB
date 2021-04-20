document.addEventListener('DOMContentLoaded', () => {
    const botones = document.querySelectorAll('.btn-add');

    botones.forEach(boton => {
        const id = boton.parentElement.parentElement.children[0].value;

        boton.addEventListener('click', e => {
            addItemToCarrito(id);
        });
    });

    const cookies = document.cookie.split(';');
    let cookie = null;
    cookies.forEach(item => {
        if (item.indexOf('items') > -1) {
            cookie = item;
        }
    });
    if (cookie != null) {
        const count = cookie.split('=')[1];
        console.log(count);
    }

    document.getElementById("id-icono-buscar").onclick = function() {
        var busqueda = document.getElementById("id_barra_buscar").value;
        enviar_a_php(busqueda);
    }

    function enviar_a_php(busqueda) {
        window.location = "/SuenoIntimo-WEB/html/resultados_busqueda.php?buscar=" + busqueda;
    }

    const sesion1 = document.querySelector('.btnimg');

    sesion1.addEventListener('click', (e) => {
        e.preventDefault();
        const divsesions = document.querySelector('#carrito-container1');
        email = document.getElementById('usuarioactual').value;
        if (divsesions.style.display == 'none') {
            divsesions.style.display = 'block';
            mostrarUsuario(email);
        } else {
            divsesions.style.display = 'none';
        }
    });

})

const bCarrito = document.querySelector('.carrito1');

bCarrito.addEventListener('click', (e) => {
    e.preventDefault();
    const carritoContainer = document.querySelector('#carrito-container');

    if (carritoContainer.style.display == 'none') {
        carritoContainer.style.display = 'block';

        actualizarCarritoUI();
    } else {
        carritoContainer.style.display = 'none';
    }
});

function mostrarUsuario(email) {
    fetch('http://localhost/SuenoIntimo-WEB/api/usuario/api-usuario.php?email=' + email)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data);
            let tablaCont = document.querySelector('#tabla1');
            let html = '';
            html += `
                <div class="session">
                
                    <div class="imagen"><img src='../SuenoIntimo-WEB/imgs/usuarios/${data.perfil.imagen}' width='70px' /></div>
                    <div class='info'>
                        <div class='nombre'>${data.perfil.nombre}</div>
                        <div>${data.perfil.email}</div>
                        <div class="boton1"><button class="modificarcuenta" id="modificatucuenta">Modifica tu Cuenta</button></div>
                                                <div class="boton3"><a class="cerrar" href="../../SuenoIntimo-WEB/php/cerrarSesion.php">Cerrar sesion</a></div>
                    </div>
                </div>
        `;


            tablaCont.innerHTML = html;

            modificar = document.querySelector('#modificatucuenta');
            modificar.addEventListener('click', (e) => {
                e.preventDefault();
                location.href = "http://localhost/SuenoIntimo-WEB/php/modificarcuenta.php";
            });
            crearc = document.querySelector('#crearcuentas');
            crearc.addEventListener('click', (e) => {
                e.preventDefault();
                location.href = "http://localhost/SuenoIntimo-WEB/php/login.php";
            });

        });

};

function actualizarCarritoUI() {
    fetch('http://localhost/SuenoIntimo-WEB/api/carrito/api-carrito.php?action=mostrar')
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data);
            let tablaCont = document.querySelector('#tabla');
            let precioTotal = '';
            let html = '';
            data.items.forEach(element => {
                html += `
                <div class='fila'>
                    <div class='imagen'><img src='../SuenoIntimo-WEB/imgs/items/${element.imagen}' width='100' /></div>
                    <div class='info'>
                        <input type='hidden' value='${element.id}' />
                        <div class='nombre'>${element.nombre}</div>
                        <div>${element.cantidad} items de $${element.precio}</div>
                        <div>Subtotal: $${element.subtotal}</div>
                        <div class='botones'><button class='btn-remove'>Quitar 1 del carrito</button></div>
                    </div>
                </div>
            `;
            });


            precioTotal = `<p>Total: $${data.info.total}</p>`;
            tablaCont.innerHTML = precioTotal + html;
            document.cookie = `items=${data.info.count}`;

            document.querySelectorAll('.btn-remove').forEach(boton => {
                boton.addEventListener('click', () => {
                    const id = boton.parentElement.parentElement.children[0].value;
                    removeItemFromCarrito(id);
                })
            });

        });

};



const addItemToCarrito = id => {
    fetch('http://localhost/SuenoIntimo-WEB/api/carrito/api-carrito.php?action=add&id=' + id)
        .then(response => {
            return response.text();
        })
        .then(data => {
            actualizarCarritoUI();
        });
};

const removeItemFromCarrito = id => {
    fetch('http://localhost/SuenoIntimo-WEB/api/carrito/api-carrito.php?action=remove&id=' + id)
        .then(res => {
            return res.json();
        })
        .then(data => {
            console.log(data.statuscode);
            actualizarCarritoUI();
        });
};