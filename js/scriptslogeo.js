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

document.getElementById("botonlogeo").onclick = function() {

    document.getElementById('nombrelog').removeAttribute("required");

    if (document.getElementById('nombrelogeo').getAttribute("style") == "display: none;") {
        document.getElementById('formulario1').setAttribute("action", "php/iniciarLogeo.php");
    } else {
        document.getElementById('formulario1').setAttribute("action", "php/insertarLogeo.php");
    }

}