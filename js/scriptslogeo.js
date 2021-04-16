document.getElementById("botonregistro").onclick = function() {

    document.getElementById('nombrelog').setAttribute("required", "required");

    document.getElementById('formulario1').removeAttribute("action");

    if (document.getElementById('nombrelogeo').getAttribute("style") == "display: none;") {

        document.getElementById('nombrelogeo').setAttribute("style", "display: block;");
        document.getElementById('direccionlogeo').setAttribute("style", "display: block;");
        document.getElementById('ciudadlogeo').setAttribute("style", "display: block;");
        document.getElementById('telefonologeo').setAttribute("style", "display: block;");
        document.getElementById('botonregistro').innerText = "Iniciar Sesion";
        document.getElementById('botonlogeo').innerText = "Crear Cuenta";

    } else {

        document.getElementById('nombrelogeo').setAttribute("style", "display: none;");
        document.getElementById('direccionlogeo').setAttribute("style", "display: none;");
        document.getElementById('ciudadlogeo').setAttribute("style", "display: none;");
        document.getElementById('telefonologeo').setAttribute("style", "display: none;");
        document.getElementById('botonregistro').innerText = "Registrarse";
        document.getElementById('botonlogeo').innerText = "Iniciar Sesion";

    }
}

$(document).ready(function() {


    $('#botonlogeo').click(function() {


        if (document.getElementById('nombrelogeo').getAttribute("style") == "display: none;") {
            if ($('#emaillogeo').val() == "") {
                alertify.alert("Alerta", "Debes ingresar un Email");
                return false;
            } else if ($('#contraseñalogeo').val() == "") {
                alertify.alert("Alerta", "Debes ingresar una Contraseña");
                return false;
            }

            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            valor = document.getElementById('emaillogeo').value;
            if (emailRegex.test(valor)) {} else {
                alertify.error("La dirección de email no tiene el formato correcto.");
                return false;
            }


            cadena = "email=" + $('#emaillogeo').val() +
                "&contrasena=" + $('#contraseñalogeo').val();

            $.ajax({
                type: "POST",
                url: "iniciarLogeo.php",
                data: cadena,
                success: function(r) {
                    if (r == "0") {
                        alertify.error("Fallo Logearse");
                    }
                    if (r == "1") {
                        alertify.success("Logeo Exitoso");
                        location.href = " ./../index.php";
                    }
                    if (r == "2") {
                        alertify.error("Usuario Inactivo");
                    }
                }
            });

        } else {
            if ($('#nombrelog').val() == "") {
                alertify.alert("Alerta", "Debes ingresar un Nombre");
                return false;
            } else if ($('#emaillogeo').val() == "") {
                alertify.alert("Alerta", "Debes ingresar un Email");
                return false;
            } else if ($('#contraseñalogeo').val() == "") {
                alertify.alert("Alerta", "Debes ingresar una Contraseña");
                return false;
            } else if ($('#direccionlog').val() == "") {
                alertify.alert("Alerta", "Debes ingresar una Direccion");
                return false;
            } else if ($('#ciudadlog').val() == "") {
                alertify.alert("Alerta", "Debes ingresar una Ciudad");
                return false;
            } else if ($('#telefonolog').val() == "") {
                alertify.alert("Alerta", "Debes ingresar un Telefono");
                return false;
            }

            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            valor = document.getElementById('emaillogeo').value;
            if (emailRegex.test(valor)) {} else {
                alertify.error("La dirección de email no tiene el formato correcto.");
                return false;
            }

            var tipo;

            var isChecked = document.getElementById('cbox').checked;
            if (isChecked) {
                tipo = "admin";
            } else {
                tipo = "usuario";
            }

            cadena = "nombre=" + $('#nombrelog').val() +
                "&email=" + $('#emaillogeo').val() +
                "&direccion=" + $('#direccionlog').val() +
                "&ciudad=" + $('#ciudadlog').val() +
                "&telefono=" + $('#telefonolog').val() +
                "&contrasena=" + $('#contraseñalogeo').val() +
                "&tipo=" + tipo;
            $.ajax({
                type: "POST",
                async: false,
                url: "insertarLogeo.php",
                data: cadena,
                success: function(r) {
                    if (r == 1) {
                        $('#formulario1')[0].reset();
                        document.getElementById('nombrelogeo').setAttribute("style", "display: none;");
                        document.getElementById('direccionlogeo').setAttribute("style", "display: none;");
                        document.getElementById('ciudadlogeo').setAttribute("style", "display: none;");
                        document.getElementById('telefonologeo').setAttribute("style", "display: none;");
                        document.getElementById('botonregistro').innerText = "Registrarse";
                        document.getElementById('botonlogeo').innerText = "Iniciar Sesion";
                        alertify.alert("Exito", "Usuario creado con exito");
                    } else if (r == 0) {
                        alertify.error("Fallo al agregar");
                    } else if (r == 2) {
                        alertify.error("Usuario ya existe");
                    }
                }
            });
        }
    })

});