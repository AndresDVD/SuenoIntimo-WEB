<?php

    session_start();
    require_once "conectarse1.php";

    $conexion = conexion();

    $email = $_POST['email'];
    $contrasena = sha1($_POST['contrasena']);

    $sql="SELECT * from usuario where email='$email' and contrasena='$contrasena'";
    $result=mysqli_query($conexion,$sql);
    $rows = $result->num_rows;
    if($rows==1)
        {
            $_SESSION['user'] = $email;
            
            echo "1";
        }else{
            echo "0";
        }
/*
    include 'conectarse1.php';
    $query = "SELECT nombre, email, contrasena FROM usuario;";
    $result = mysqli_query($link, $query);

    $email = $_POST['emaillogeo1'];
    $contrasena = password_hash($_POST['contraseñalogeo1'], PASSWORD_BCRYPT);
    ?>
    <br>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        //printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td>",$row["codigo"],$row["nombre"],$row["email"],$row["contrasena"]);
        if ($email == $row["email"]) {
            echo "existe <br>";
            if ($contrasena == $row["contrasena"]) {
                echo "contraseña correcta <br>";
                echo "inicio sesion <br>";
                break;
            } else {
                echo "contraseña incorrecta <br>";
                echo "$contrasena <br>";
                echo $row["contrasena"];
                break;
            }
        } else {
            echo "no existe el usuario <br>";
            break;
        }
    }
    mysqli_free_result($result);
    mysqli_close($link);*/
    ?>