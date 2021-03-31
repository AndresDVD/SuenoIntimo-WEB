<?php

    session_start();
    require_once "conectarse1.php";

    $conexion = conexion();

    $email = $_POST['email'];
    $contrasena = sha1($_POST['contrasena']);

    $sql="SELECT * from usuario where email='$email' and contrasena='$contrasena'";
    $result=mysqli_query($conexion,$sql);
    $rows = $result->num_rows;
    $row =mysqli_fetch_array($result);
    if($rows==1)
        {
            $_SESSION['user'] = $row['email'];
            
            echo "1";
        }else{
            echo "0";
        }
    ?>