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