<?php
    require_once "conectarse1.php";
    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = sha1($_POST['contrasena']);

    $sql="INSERT into usuario (nombre,email,contrasena)
                values ('$nombre','$email','$contrasena')";
    $result=mysqli_query($conexion,$sql);
    if($result){
        echo 1;
    }else{
        echo 0;
    }
?>