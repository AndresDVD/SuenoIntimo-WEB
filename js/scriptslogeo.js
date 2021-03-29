document.getElementById("botonregistro").onclick = function() {

    document.getElementById('nombrelog').setAttribute("required", "required");

    document.getElementById('formulario1').removeAttribute("action");

    if (document.getElementById('nombrelogeo').getAttribute("style") == "display: none;") {

        document.getElementById('nombrelogeo').setAttribute("style", "display: block;");
        document.getElementById('botonregistro').innerText = "Iniciar Sesion";
        document.getElementById('botonlogeo').innerText = "Crear Cuenta";

    } else {

        document.getElementById('nombrelogeo').setAttribute("style", "display: none;");
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

            cadena = "email=" + $('#emaillogeo').val() +
                "&contrasena=" + $('#contraseñalogeo').val();

            $.ajax({
                type: "POST",
                url: "iniciarLogeo.php",
                data: cadena,
                success: function(r) {
                    if (r == 1) {
                        alertify.success("Logeo Exitoso")
                    } else {
                        alertify.error("Fallo", "Fallo Logearse");
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
            }
            cadena = "nombre=" + $('#nombrelog').val() +
                "&email=" + $('#emaillogeo').val() +
                "&contrasena=" + $('#contraseñalogeo').val();
            $.ajax({
                type: "POST",
                async: false,
                url: "insertarLogeo.php",
                data: cadena,
                success: function(r) {
                    $('#formulario1')[0].reset();
                    if (r == 1) {
                        alertify.success("Agregado con exito");
                    } else {
                        alertify.error("Fallo al agregar");
                    }
                }
            });
        }
    })

});
/*
document.getElementById("botonlogeo").onclick = function() {

    document.getElementById('nombrelog').removeAttribute("required");

    if (document.getElementById('nombrelogeo').getAttribute("style") == "display: none;") {
        //document.getElementById('formulario1').setAttribute("action", "iniciarLogeo.php");
        if (document.getElementById('emaillogeo').value == "") {
            alert("Por favor ingresa un Email");
            return false;
        } else {
            if (document.getElementById('contraseñalogeo').value == "") {
                alert("Por favor ingresa una Contraseña");
                return false;
            }
        }
    } else {
        if (document.getElementById('nombrelog').value == "") {
            alert("Por favor ingresa un Nombre");
            return false;
        } else {
            if (document.getElementById('emaillogeo').value == "") {
                alert("Por favor ingresa un Email");
                return false;
            } else {
                if (document.getElementById('contraseñalogeo').value == "") {
                    alert("Por favor ingresa una Contraseña");
                    return false;
                }
            }
        }
        //document.getElementById('formulario1').setAttribute("action", "insertarLogeo.php");
    }

}*/