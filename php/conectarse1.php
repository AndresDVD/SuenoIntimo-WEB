<?php
    $host ="localhost"; //Direccion IP o el Servido de MYSQL
    $usuario ="u700865171_sunointimo"; //Nombre del usuario del Servidor de MYSQL
    $contrasena = "Www20185571"; //Contrasena del Servido de MYSQL
    $baseDatos ="u700865171_suenointimo";

    function conectarse(){

        global $host, $usuario, $contrasena, $baseDatos,$tabla;
        if(!($link = mysqli_connect($host, $usuario, $contrasena))){
            echo "ERROR CONECTANDO A LA BASE DE DATOS. <br>" ; 
        }else{
            echo "Listo, SE HA CONECTADO <br>" ;
        }
        if (!mysqli_select_db($link, $baseDatos)){
            echo "ERROR CONECTANDO A LA BD <br>";
        }else{
            echo "EXITO AL CONECTANDO  $baseDatos A LA BD  <br>";
        }
        return $link;
    }
    $link = conectarse();
    $result = mysqli_query ($link, $query);
?>
