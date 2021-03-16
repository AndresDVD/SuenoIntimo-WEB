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
        document.getElementById("mostrar").innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon_flecha" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <line x1="14" y1="12" x2="4" y2="12" /> <line x1="14" y1="12" x2="10" y2="16" /> <line x1="14" y1="12" x2="10" y2="8" /> <line x1="20" y1="4" x2="20" y2="20" /> </svg>';
        menu.removeClass('show');
    } else {
        document.getElementById("mostrar").innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <line x1="10" y1="12" x2="20" y2="12" /> <line x1="10" y1="12" x2="14" y2="16" /> <line x1="10" y1="12" x2="14" y2="8" /> <line x1="4" y1="4" x2="4" y2="20" /> </svg>';
        menu.addClass('show');
    }
}

document.getElementById("botonmenul1").onclick = function() {


    if (document.getElementById("contenidomenu1").getAttribute("style") == "display:block") {
        document.getElementById("contenidomenu1").setAttribute("style", "display:none");
    } else {
        document.getElementById("contenidomenu1").setAttribute("style", "display:block");
    }


}

document.getElementById("botonmenul2").onclick = function() {

    if (document.getElementById("contenidomenu2").getAttribute("style") == "display:block") {
        document.getElementById("contenidomenu2").setAttribute("style", "display:none");
    } else {
        document.getElementById("contenidomenu2").setAttribute("style", "display:block");
    }

}

document.getElementById("botonmenul3").onclick = function() {

    if (document.getElementById("contenidomenu3").getAttribute("style") == "display:block") {
        document.getElementById("contenidomenu3").setAttribute("style", "display:none");
    } else {
        document.getElementById("contenidomenu3").setAttribute("style", "display:block");
    }

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