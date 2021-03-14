
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conctatanos</title>
</head>
<body>
    
    <?php
    $host ="localhost"; //Direccion IP o el Servido de MYSQL
    $usuario ="u700865171_alejabecerra"; //Nombre del usuario del Servidor de MYSQL
    $contrasena = "Www201855639"; //Contrasena del Servido de MYSQL
    $baseDatos ="u700865171_alejabecerra";
    $tabla = "tallerContacto"; //Nombre de la tabla a trabajar

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

   
</body>
</html>
