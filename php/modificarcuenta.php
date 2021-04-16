
<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location: ./../index.php");
    }else{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logeo</title>
<link rel="stylesheet" href="../css/style.css" />
<?php require_once "scripts.php"; ?>
</head>
<body>
<p><br></p>
<p><br></p>
<p><br></p>
<header>
    <div class="cabecera">
        <span class="menu-icono">Menú</span>
        <div class="navegar-cabecera">
            <img src="../imgs/Sueño Intimo 2 (Transparente).png">
            <div class="cab">
                <nav id="navegar">
                    <a href="../index.php" class="btn">Inicio</a>
                    <a href="../index.php #servic" class="btn">Catalogo</a>
                    <a href="../index.php #contac2" class="btn">Contacto</a>
                </nav>
            </div>
            <div class="busqueda">
                <input type="text" placeholder="Busqueda" name="barra_buscar" id="id_barra_buscar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icono_buscar" id="id-icono-buscar" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                  </svg>
            </div>
        </div>
    </div>
</header>
<main class="contenedor">
    <section class="contacto1" id="contac1">
        <form class="formulario" id="formulario1" method="post">
            <fieldset>
                <input type="hidden" id="usuarioactual" value="<?php echo $_SESSION['user']; ?>">
                <h3>Información básica</h3>
                <div id="tabla2" class="tabla1">
                </div>
            </fieldset>
        </form>
    </section>
</main>
<footer class="pie">
    <p>Todos los derechos reservados Sueño Intimo ©</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/scriptsmodificarc.js"></script>
</body>
</html>
<?php
}
?>