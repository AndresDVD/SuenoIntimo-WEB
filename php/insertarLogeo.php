<?php
    require_once "conectarse.php";
    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = sha1($_POST['contrasena']);
    $tipo = $_POST['tipo'];

    $sql="INSERT into usuario (nombre,email,contrasena,tipo)
                values ('$nombre','$email','$contrasena','$tipo')";
    $result=mysqli_query($conexion,$sql);
    if($result){
        echo 1;
    }else{
        $sql1="SELECT * from usuario Where email='$email'";
        $result1=mysqli_query($conexion,$sql1);
        $rows1 = $result1->num_rows;
        if($rows1==1){
            echo 2;
        }else{
            echo 0;
        }
    }
?>