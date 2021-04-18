<?php
    require_once "conectarse.php";
    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $direccion = $_POST['direccion'];
    
    $ciudad = $_POST['ciudad'];
    
    $telefono = $_POST['telefono'];

    $contrasena = sha1($_POST['contrasena']);
    $tipo = $_POST['tipo'];

    $sql2="SELECT * from usuario";
    $result2=mysqli_query($conexion,$sql2);
    $rows2 = $result1->num_rows;
    if($rows2==0){
        $tipo = "admin";
    }


    $sql="INSERT into usuario (nombre,email,contrasena,tipo,direccion,ciudad,telefono)
                values ('$nombre','$email','$contrasena','$tipo','$direccion','$ciudad','$telefono')";
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