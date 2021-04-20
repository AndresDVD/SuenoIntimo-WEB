<?php

    session_start();
    require_once "conectarse.php";

    $conexion = conexion();

    $email= $_POST['email'];
    $contra = $_POST['contra'];
    $sql="DELETE FROM usuario WHERE email = '$email' and   contrasena = '$contra'";
    $result=mysqli_query($conexion,$sql);

    $sql1="SELECT * from usuario where email='$email' and contrasena = '$contra'";
    
    $result1=mysqli_query($conexion,$sql1);
    $rows = $result1->num_rows;
    $row =mysqli_fetch_array($result1);

    if($rows==1)
        {
            echo "0";
        }else{
            echo "1";
        }
    ?>