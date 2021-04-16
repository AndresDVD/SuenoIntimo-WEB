

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sueño Intimo</title>
    <link rel="icon" href="imgs/SueñoIntimoLogo.png" type="image/png" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap">
</head>
<body>
<header>
        <div class="cabecera">
            <span class="menu-icono"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </span>
            <div class="navegar-cabecera">
                <img src="imgs/Sueño Intimo 2 (Transparente).png">
                <div class="cab">
                    <nav id="navegar">
                        <a href="#nosot1" class="btn" id="btnsi">Inicio</a>
                        <a href="#servic" class="btn" id="btnsi">Catalogo</a>
                        <a href="#contac2" class="btn" id="btnsi">Contacto</a>
                    </nav>
                </div>
                <div class="busqueda">
                    
                    <input type="search" placeholder="Busqueda" name="barra_buscar" id="id_barra_buscar" 
                    >
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
                      
                      " class="carrito1" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            }else{
                                echo "display:none;";
                            }
                        }else{
                                echo "display:none;";
                            }
                    ?>"
                    >
                    <div class="div_opciones" 
                        style="
                        <?php
                        if(isset($_SESSION['user'])){ 
                        echo "display:block;";
                        }else{
                        echo "display:none;";
                        }
                        ?>">     
                        <svg xmlns="http://www.w3.org/2000/svg" class="icono_opciones" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <line x1="19" y1="7" x2="19" y2="10" />
                            <line x1="19" y1="14" x2="19" y2="14.01" />
                        </svg>
                        <ul class="menu_desplegable1">
                            <li><a class="created_later" href="php/borrarUsuario.php">Borra Usuario</a></li>
                            <li><a class="created_later" href="">opc2</a></li>
                            <li><a class="created_later" href="">opc3</a></li>
                        </ul>
                    </div>
                    <div class="div_sesion">

                    
                        <?php
                            if(isset($_SESSION['user'])){ 
                                ?>
                                
                                
                                <?php 
                                
                                if(isset($_SESSION['user'])){ 
                                    $img = '<img src="../SuenoIntimo-WEB/imgs/usuarios/'.$_SESSION['imagen']. " \"class=\"btnimg\">";
                                    echo ($img);
                                    
                                }
                                
                                ?>
                                
                                <?php
                            }else{
                                ?>  
                                    <img src="" class="btnimg" style="display: none;">
                                    <a class="btnn" href="../SuenoIntimo-WEB/php/login.php" id="btnlog">Login</a>
                                <?php
                            }
                        ?>

                    </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div id="carrito-container" style="display:none;">
           <div id="tabla">
           </div>    
           <div class='botons'>
           <button class="btn-remove" id="btns">Cancelar</button>       
           <button class="btn-remove" >Continuar</button> 
           </div>
    </div>
    <div id="carrito-container1" style="display:none;" class="divsesions">
           <input type="hidden" id="usuarioactual" value="<?php echo $_SESSION['user']; ?>">
           <div id="tabla1" class="tabla1">
                            <?php
                            $img = '<img src="../SuenoIntimo-WEB/imgs/usuarios/'.$_SESSION['imagen']. " \"class=\"btnimg\">";
                            echo ($img);
                            ?>
            </div>
            <div class="boton2"><button class="modificarcuenta" id="modificarcuentas" style="
                        <?php if($_SESSION['tipo'] == 'admin'){ 
                            echo "display:block;";
                        }else{
                            echo "display:none;";
                        } ?>">Modifica Cuentas</button>
            </div>
    </div>
    <div class="menulateral" id="menulateralcompleto" style="width:40px;">
        <div class="menul" >
            <div class="informacionsinboton">
                <div class="mision">
                    <p class="botonmenul" id="botonmenul1">+ Mision</p>
                    <div class="contenidomenu" id="contenidomenu1" style="display: none;">
                        Sueño Intimo es una empresa de confección y comercialización de pijamas para mujeres de todas las edades, cuya misión es satisfacer a cabalidad las necesidades del cliente.
                    </div>
                </div>
                <div class="vision">
                    <p class="botonmenul" id="botonmenul2">+ Vision</p>
                    <div class="contenidomenu" id="contenidomenu2" style="display: none;">
                        Sueño Intimo se proyecta como una empresa líder en confecciones por la creatividad de sus diseños, no sólo a nivel regional sino a nivel nacional, convirtiéndose en una marca reconocida por sus variados estilos y por la calidad de sus productos.
                    </div>
                </div>
                <div class="usoempresa">
                    <p class="botonmenul" id="botonmenul3">+ Servicios</p>
                    <div class="contenidomenu" id="contenidomenu3" style="display: none;">
                        - Confección de pijamas de catalogo<br><br>
                        - Venta de pijamas al por mayor<br><br>
                        - Venta de pijamas al detal<br><br>
                    </div>  
                </div>

                <div class="usoempresa">
                    <p class="botonmenul" id="botonmenul4">+ Ubicacion</p>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.161031656296!2d-76.29826517081005!3d3.8862279998233475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwNTMnMTAuNCJOIDc2wrAxNyc1MS44Ilc!5e0!3m2!1ses!2sco!4v1616820602528!5m2!1ses!2sco"
                            width="300" height="250" allowfullscreen="" loading="lazy" id="ubicacion" style="display: none; border:0;" align="middle">
                    </iframe>
                    </div>
                </div>
                <div class="quedarse_con_nosotros">
                    <p class="botonmenul" id="botonmenul5">+ Qué ofrecemos</p>
                    <div class="contenidomenu" id="contenidomenu5" style="display: none;">
                        - La calidad de las telas que usamos<br><br>
                        - Las técnicas de confección<br><br>
                        - La preparación de nuestros empleados y empleadas<br><br>
                        - El trabajo que realizamos: Constante y con Pasión con el objetivo de 
                        ser cada vez mejores.<br><br>
                        Estas y muchas más, son razones por las que las personas eligen 
                        Sueño Intimo primero.<br><br>
                        - Si quieres saber más acerca de nosotros, Contáctanos para tener el gusto
                        de atenderte
                    </div>
                </div> 
            </div>
        </div>
        <button class="mostrar" id="mostrar">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon_flecha" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="14" y1="12" x2="4" y2="12" />
            <line x1="14" y1="12" x2="10" y2="16" />
            <line x1="14" y1="12" x2="10" y2="8" />
            <line x1="20" y1="4" x2="20" y2="20" />
          </svg>
        </button>
    </div>
    <script src="../SuenoIntimo-WEB/js/carritoindex.js"></script>
</body>
</html>