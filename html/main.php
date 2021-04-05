
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
                        
                        <a href="../index.php" class="btn">Inicio</a>
                        <a href="#servic" class="btn">Catalogo</a>
                        <a href="#contac2" class="btn">Contacto</a>
                        <a href=
                        <?php 
                        
                        if(isset($_SESSION['user'])){ 
                            echo "../../SuenoIntimo-WEB/php/cerrarsesion.php";
                        }else{
                            echo "../../SuenoIntimo-WEB/php/login.php";
                        }
                        
                        ?> class="btn">
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
                <input type="search" placeholder="Busqueda" name="barra_buscar" id="id_barra_buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_buscar" id="id-icono-buscar" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                      </svg>
                      <svg style="
                      
                      <?php
                      if(isset($_SESSION['user'])){ 
                        echo "display:block;";
                        }else{
                        echo "display:none;";
                        }
                      ?>
                      
                      "xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="6" cy="19" r="2" />
                        <circle cx="17" cy="19" r="2" />
                        <path d="M17 17h-11v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                      </svg>
                      <a href="../SuenoIntimo-WEB/php/login.php" style="
                      
                      <?php 

                        if(isset($_SESSION['user'])){
                        if($_SESSION['tipo'] == 'admin'){ 
                                echo "display:block;";
                            }
                        }else{
                                echo "display:none;";
                            }
                            ?>"
                      ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="9" cy="7" r="4" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <line x1="19" y1="7" x2="19" y2="10" />
                        <line x1="19" y1="14" x2="19" y2="14.01" />
                        </svg>
                        </a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>