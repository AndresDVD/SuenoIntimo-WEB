
<?php

session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categoria 1</title>
    <link rel="stylesheet" href="../css/catStyle.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap">

</head>
<body>
<header>
        <div class="cabecera">
            <span class="menu-icono">Menú</span>
            <div class="navegar-cabecera">
                <div class="logo-back">
                    <a href="../index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flecha_volver" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                      </svg>
                    </a>
                      <img src="../imgs/Sueño Intimo 2 (Transparente).png">
                </div>
                <div class="cab">
                    <nav id="navegar">
                        <a href="../index.php" id="btninicio">Inicio</a>
                        <a href="#servic" id="btnclien">Catalogo</a>
                        <a href="#contac2" id="btncontac">Contacto</a>
                        <a href=
                        <?php 
                        
                        if(isset($_SESSION['user'])){ 
                            echo "../php/cerrarsesion.php";
                        }else{
                            echo "../php/login.php";
                        }
                        
                        ?> id="btnlog">
                        <?php
                        if(isset($_SESSION['user'])){ 
                            echo "Log out";
                        }else{
                            echo "Login";
                        }
                        ?></a>
                    </nav>
                </div>
                <div class="busqueda">
                    <input type="text" placeholder="Busqueda" name="barra_buscar" id="id_barra_buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_buscar" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                      </svg>
                </div>
            </div>
        </div>
    </header>
</body>
</html>