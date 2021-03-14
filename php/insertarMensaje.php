<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertarMensaje</title>
</head>
<body>
<?php
    include 'conectarse1.php';

    if($_POST)
    {
        $queryInsert = "INSERT INTO mensajes (nombre, telefono, correo, mensaje)
        VALUES ('".$_POST['nombremen1']."', '".$_POST['telefonomen1']."','".$_POST['correomen1']."','".$_POST['mensajemen1']."');";
        $resultInsert = mysqli_query($link, $queryInsert);

        if($resultInsert)
        {
            echo "Los mensaje se ingresaron con Exito. <br>";
        }else{
            echo "Los mensaje NO se ingresaron con Exito. <br>";
        }
        
    }
    $query = "SELECT nombre, email, contraseña FROM usuario;";
    $result = mysqli_query($link, $query);
    header('Location:' . getenv('HTTP_REFERER'));
?>
<script>alert("Mensaje enviado correctamente");</script>
</body>
</html>