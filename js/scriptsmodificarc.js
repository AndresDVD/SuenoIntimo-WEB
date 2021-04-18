document.addEventListener('DOMContentLoaded', () => {

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
    email = document.getElementById('usuarioactual').value;
    mostrarUsuario(email);

})

function mostrarUsuario(email) {
    fetch('http://localhost/SuenoIntimo-WEB/api/usuario/api-usuario.php?email=' + email)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data);
            let tablaCont = document.querySelector('#tabla2');
            let html = '';
            html += `
                <div class="session">
                
                    <div class="imagen"><img src='../imgs/usuarios/${data.perfil.imagen}' width='70px' /></div>
                    <div class='info'>
                    <div class="boton1"><button class="modificarcuenta" id="nombre">Nombre:    ${data.perfil.nombre}</button></div>
                    <div class="boton1" id="enviarnombrediv" style="display:none">
                        <input type="text" placeholder="Ingrese su nuevo nombre*" name="nombrelog1" id="nombrelog">
                        <div class="boton1"><button class="enviarcuenta" id="enviarnombre">Enviar</button></div>
                    </div>
                    <div class="boton1"><button class="modificarcuenta" id="direccion">Direccion:    ${data.perfil.direccion}</button></div>
                    <div class="boton1" id="enviardirediv" style="display:none">
                        <input type="text" placeholder="Ingrese su nueva direccion*" name="dir1" id="dir">
                        <div class="boton1"><button class="enviarcuenta" id="enviardireccion">Enviar</button></div>
                    </div>
                    <div class="boton1"><button class="modificarcuenta" id="ciudad">Ciudad:    ${data.perfil.ciudad}</button></div>
                    <div class="boton1" id="enviarciudaddiv" style="display:none">
                        <input type="text" placeholder="Ingrese su nueva ciudad*" name="ciudad1" id="ciudad1">
                        <div class="boton1"><button class="enviarcuenta" id="enviarciudad">Enviar</button></div>
                    </div>
                    <div class="boton1"><button class="modificarcuenta" id="telefono">Telefono:    ${data.perfil.telefono}</button></div>
                    <div class="boton1" id="enviarteldiv" style="display:none">
                        <input type="text" placeholder="Ingrese su nuevo telefono*" name="telefono1" id="telefono1">
                        <div class="boton1"><button class="enviarcuenta" id="enviartelefono">Enviar</button></div>
                    </div>
                    <div class="boton1"><button class="modificarcuenta" id="contrasena">Contraseña:    ********</button></div>
                    <div class="boton1" id="enviarcontrdiv" style="display:none">
                        <input type="text" placeholder="Ingrese su contraseña actual*" name="contrasena11" id="contrasena1">
                        <div class="boton1"><button class="enviarcuenta" id="enviarcontrasena1">Enviar</button></div>
                    </div>
                    <div class="boton1"><button class="modificarcuenta" id="email">Email:    ${data.perfil.email}</button></div>
                    </div>
                </div>
        `;


            tablaCont.innerHTML = html;

            nombre = document.querySelector('#nombre');
            nombre.addEventListener('click', (e) => {
                e.preventDefault();
                nombrediv = document.getElementById("enviarnombrediv").getAttribute("style");
                nomdiv = document.getElementById("enviarnombrediv");
                if (nombrediv == "display:block") {
                    nomdiv.setAttribute("style", "display:none");
                }
                if (nombrediv == "display:none") {
                    nomdiv.setAttribute("style", "display:block");
                };
            });

            nombreenviar = document.querySelector('#enviarnombre');
            nombreenviar.addEventListener('click', (e) => {
                e.preventDefault();
                if ($('#nombrelog').val() == "") {
                    alertify.alert("Alerta", "Debes ingresar un nombre");
                    return false;
                }
                cadena = "nombre=" + $('#nombrelog').val() +
                    "&direccion=" + data.perfil.direccion +
                    "&ciudad=" + data.perfil.ciudad +
                    "&telefono=" + data.perfil.telefono +
                    "&email=" + email;
                $.ajax({
                    type: "POST",
                    url: "modificarUsuarioBD.php",
                    data: cadena,
                    success: function(r) {
                        if (r == "0") {
                            alertify.error("Fallo al Modificar");
                        }
                        if (r == "1") {
                            alertify.success("Modificacion Exitosa");
                            mostrarUsuario(email);
                        }
                    }
                });
            });


            direccion = document.querySelector('#direccion');
            direccion.addEventListener('click', (e) => {
                e.preventDefault();
                dirdiv = document.getElementById("enviardirediv").getAttribute("style");
                dir = document.getElementById("enviardirediv");
                if (dirdiv == "display:block") {
                    dir.setAttribute("style", "display:none");
                }
                if (dirdiv == "display:none") {
                    dir.setAttribute("style", "display:block");
                };
            });

            direccionenviar = document.querySelector('#enviardireccion');
            direccionenviar.addEventListener('click', (e) => {
                e.preventDefault();
                if ($('#dir').val() == "") {
                    alertify.alert("Alerta", "Debes ingresar un nombre");
                    return false;
                }
                cadena = "nombre=" + data.perfil.nombre +
                    "&direccion=" + $('#dir').val() +
                    "&ciudad=" + data.perfil.ciudad +
                    "&telefono=" + data.perfil.telefono +
                    "&email=" + email;
                $.ajax({
                    type: "POST",
                    url: "modificarUsuarioBD.php",
                    data: cadena,
                    success: function(r) {
                        if (r == "0") {
                            alertify.error("Fallo al Modificar");
                        }
                        if (r == "1") {
                            alertify.success("Modificacion Exitosa");
                            mostrarUsuario(email);
                        }
                    }
                });
            });

            ciudad = document.querySelector('#ciudad');
            ciudad.addEventListener('click', (e) => {
                e.preventDefault();
                nombrediv = document.getElementById("enviarciudaddiv").getAttribute("style");
                nomdiv = document.getElementById("enviarciudaddiv");
                if (nombrediv == "display:block") {
                    nomdiv.setAttribute("style", "display:none");
                }
                if (nombrediv == "display:none") {
                    nomdiv.setAttribute("style", "display:block");
                };
            });

            enviarciudad = document.querySelector('#enviarciudad');
            enviarciudad.addEventListener('click', (e) => {
                e.preventDefault();
                if ($('#ciudad1').val() == "") {
                    alertify.alert("Alerta", "Debes ingresar un nombre");
                    return false;
                }
                cadena = "nombre=" + data.perfil.nombre +
                    "&direccion=" + data.perfil.direccion +
                    "&ciudad=" + $('#ciudad1').val() +
                    "&telefono=" + data.perfil.telefono +
                    "&email=" + email;
                $.ajax({
                    type: "POST",
                    url: "modificarUsuarioBD.php",
                    data: cadena,
                    success: function(r) {
                        if (r == "0") {
                            alertify.error("Fallo al Modificar");
                        }
                        if (r == "1") {
                            alertify.success("Modificacion Exitosa");
                            mostrarUsuario(email);
                        }
                    }
                });
            });


            telefono = document.querySelector('#telefono');
            telefono.addEventListener('click', (e) => {
                e.preventDefault();
                nombrediv = document.getElementById("enviarteldiv").getAttribute("style");
                nomdiv = document.getElementById("enviarteldiv");
                if (nombrediv == "display:block") {
                    nomdiv.setAttribute("style", "display:none");
                }
                if (nombrediv == "display:none") {
                    nomdiv.setAttribute("style", "display:block");
                };
            });

            telefonoenviar = document.querySelector('#enviartelefono');
            telefonoenviar.addEventListener('click', (e) => {
                e.preventDefault();
                if ($('#telefono1').val() == "") {
                    alertify.alert("Alerta", "Debes ingresar un nombre");
                    return false;
                }
                cadena = "nombre=" + data.perfil.nombre +
                    "&direccion=" + data.perfil.direccion +
                    "&ciudad=" + data.perfil.ciudad +
                    "&telefono=" + $('#telefono1').val() +
                    "&email=" + email;
                $.ajax({
                    type: "POST",
                    url: "modificarUsuarioBD.php",
                    data: cadena,
                    success: function(r) {
                        if (r == "0") {
                            alertify.error("Fallo al Modificar");
                        }
                        if (r == "1") {
                            alertify.success("Modificacion Exitosa");
                            mostrarUsuario(email);
                        }
                    }
                });
            });


            contrasena = document.querySelector('#contrasena');
            contrasena.addEventListener('click', (e) => {
                e.preventDefault();
                nombrediv = document.getElementById("enviarcontrdiv").getAttribute("style");
                nomdiv = document.getElementById("enviarcontrdiv");
                if (nombrediv == "display:block") {
                    nomdiv.setAttribute("style", "display:none");
                }
                if (nombrediv == "display:none") {
                    nomdiv.setAttribute("style", "display:block");
                };
            });

            nombreenviar = document.querySelector('#enviarnombre');
            nombreenviar.addEventListener('click', (e) => {
                e.preventDefault();
                if ($('#nombrelog').val() == "") {
                    alertify.alert("Alerta", "Debes ingresar un nombre");
                    return false;
                }
                cadena = "nombre=" + $('#nombrelog').val() +
                    "&direccion=" + data.perfil.direccion +
                    "&ciudad=" + data.perfil.ciudad +
                    "&telefono=" + data.perfil.telefono +
                    "&email=" + email;
                $.ajax({
                    type: "POST",
                    url: "modificarUsuarioBD.php",
                    data: cadena,
                    success: function(r) {
                        if (r == "0") {
                            alertify.error("Fallo al Modificar");
                        }
                        if (r == "1") {
                            alertify.success("Modificacion Exitosa");
                            mostrarUsuario(email);
                        }
                    }
                });
            });


        });

};