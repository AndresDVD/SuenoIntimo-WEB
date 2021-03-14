<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciarLogeo</title>
</head>
<body>

    <?php
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
    mysqli_close($link);
    ?>
</body>
</html>