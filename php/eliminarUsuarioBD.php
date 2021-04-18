<?php

    session_start();
    require_once "conectarse.php";

    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email= $_POST['email'];
    $sql="UPDATE usuario SET nombre = '$nombre', direccion = '$direccion',  ciudad = '$ciudad',  telefono = '$telefono' WHERE email = '$email';";
    
    $result=mysqli_query($conexion,$sql);

    $sql1="SELECT * from usuario where email='$email' and nombre = '$nombre' and direccion = '$direccion' and ciudad = '$ciudad' and telefono = '$telefono'";
    
    $result1=mysqli_query($conexion,$sql1);
    $rows = $result1->num_rows;
    $row =mysqli_fetch_array($result1);
    if($rows==1)
        {
            echo "1";
        }else{
            echo "0";
        }
    ?>