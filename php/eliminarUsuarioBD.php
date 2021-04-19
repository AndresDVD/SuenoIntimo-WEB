<?php

    session_start();
    require_once "conectarse.php";

    $conexion = conexion();

    $email= $_POST['email'];
    $contra = $_POST['contra'];
    $sql="DELETE usuario WHERE email = '$email' and   contrasena = '$contra'";
    
    $result=mysqli_query($conexion,$sql);
    $rows = $result1->num_rows;
    $row =mysqli_fetch_array($result1);
    if($rows==1)
        {
            echo "1";
        }else{
            echo "0";
        }
    ?>