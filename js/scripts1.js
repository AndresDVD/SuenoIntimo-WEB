jQuery('document').ready(function() {

    var menuBtn = $('.menu-icono'),
        menu = $('.cab nav');


    menuBtn.click(function() {


        if (menu.hasClass('show')) {
            menu.removeClass('show');
        } else {
            menu.addClass('show');
        }

    })

    jQuery('.tels').keypress(function(tecla)

        {

            if (tecla.charCode < 48 || tecla.charCode > 57)

            {

                return false;

            }

        });

});

//document.getElementById('nombrelogeo').setAttribute("style", "display: none;");

document.getElementById("mostrar").onclick = function() {

    menu = $('.menul');

    if (menu.hasClass('show')) {
        menu.removeClass('show');
    } else {
        menu.addClass('show');
    }
    document.getElementById('mostrar').setAttribute("style", "display: none;");

}

document.getElementById("mostrar1").onclick = function() {

    menu = $('.menul');

    if (menu.hasClass('show')) {
        menu.removeClass('show');
    } else {
        menu.addClass('show');
    }
    document.getElementById('mostrar').setAttribute("style", "display: show;");

}

document.getElementById("btninicio").onclick = function() {

    menu = $('.cab nav');

    menu.removeClass('show');

}
document.getElementById("btnnost").onclick = function() {

    menu = $('.cab nav');

    menu.removeClass('show');

}
document.getElementById("btnclien").onclick = function() {

    menu = $('.cab nav');

    menu.removeClass('show');

}
document.getElementById("btncontac").onclick = function() {

    menu = $('.cab nav');

    menu.removeClass('show');

}
document.getElementById("btnlog").onclick = function() {

    menu = $('.cab nav');

    menu.removeClass('show');

}

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