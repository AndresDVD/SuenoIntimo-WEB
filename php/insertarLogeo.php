<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertarLogeo</title>
</head>
<body>
<?php
    include 'conectarse1.php';

    if($_POST)
    {
        if(!empty($_POST['nombrelog1']) && !empty($_POST['emaillogeo1']) && !empty($_POST['contraseñalogeo1'])){
        $nombre = $_POST['nombrelog1'];
        $correo = $_POST['emaillogeo1'];
        $password = password_hash($_POST['contraseñalogeo1'], PASSWORD_BCRYPT);
        $queryInsert = "INSERT INTO usuario (nombre, email, contrasena)
        VALUES ('$nombre','$correo','$password');";
        $resultInsert = mysqli_query($link, $queryInsert);

        if($resultInsert)
        {
            $mensaje = 'Los registros se ingresaron con Exito. ';
            echo "Los registros se ingresaron con Exito. <br>";
            return $mensaje;
            
        }else{
            echo "Los registros NO se ingresaron con Exito, el Email ya existe. <br>";
        }
        }else{
        }
    }
    $query = "SELECT nombre, email, contraseña FROM usuario;";
    $result = mysqli_query($link, $query);
    
?>
</body>
</html>