
<?php

    session_start();

        
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sueño Intimo</title>
    <link rel="icon" href="imgs/SueñoIntimoLogo.png" type="image/png" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap">
</head>

<body>
    <a name="nosot1"></a>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <header>
        <div class="cabecera">
            <span class="menu-icono">Menú</span>
            <div class="navegar-cabecera">
                <img src="imgs/Sueño Intimo 2 (Transparente).png">
                <div class="cab">
                    <nav id="navegar">
                        <a href="#nosot1" id="btninicio">Inicio</a>
                        <a href="#servic" id="btnclien">Catalogo</a>
                        <a href="#contac2" id="btncontac">Contacto</a>
                        
                        <a href=
                        <?php 
                        
                        if(isset($_SESSION['user'])){ 
                            echo "../SuenoIntimo-WEB/php/cerrarsesion.php";
                        }else{
                            echo "../SuenoIntimo-WEB/php/login.php";
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_buscar" id="id-icono-buscar" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                      </svg>
                </div>
            </div>
        </div>
    </header>
    <div class="menulateral" id="menulateralcompleto">
        <div class="menul">
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
                        Realizamos confección de pijamas tanto al por mayor como al detal.
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
    <main class="contenedor">

        <section class="fondo">
            <div class="contenido">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                  </svg>
                <p>Buga, Valle del Cauca</p>
            </div>
            <p></p>
            <p></p>
            </div>
        </section>
        <div class="inicio">
            <div class="slider">
                <ul>
                    <li><img src="imgs/01.png" alt=""></li>
                    <li><img src="imgs/02.png" alt=""></li>
                    <li><img src="imgs/03.png" alt=""></li>
                    <li><img src="imgs/04.png" alt=""></li>
                </ul>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, voluptates officiis. Magnam ut corporis quia, qui, cum rem dicta, accusamus illo suscipit doloremque fugit expedita! Sapiente dicta laudantium explicabo incidunt?</p>
        </div>
        <a name="servic"></a>
        <p></p>
        <p></p>
        <p></p>
        <main class="sombra">
            <h2>CATÁLOGO</h2>
            <div class="servicios">
                <section class="servicio">
                    <img src="imgs/ej_cat1.jpg" alt="">
                    <a href="html/cat1.html">Pijamas para acostarse</a>
                </section>
                <section class="servicio">
                    <img src="imgs/ej_cat2.jpg" alt="">
                    <a href="html/cat2.html">Pijamas para dormir</a>
                </section>
                <section class="servicio">
                    <img src="imgs/ej_cat3.jpg" alt="">
                    <a href="html/cat3.html">Pijamas para levantarse</a>
                </section>
            </div>
        </main>
        <a name="contac2" class="contac3"></a>
        <section class="contacto" id="contac">
            <form class="formulario" method="post" action="php/insertarMensaje.php">
                <fieldset class="form_interno">
                    <div class="cabecera_mail">
                        <div class="icono_mail">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="90" height="90" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                        </div>
                        <h3>Contactanos Aqui</h3>
                    </div>
                    <div class="contener-campos">
                        <div class="campo">
                            <input type="text" placeholder="Nombre*" name="nombremen1" required id="nombremensaje">
                        </div>
                        <div class="campo">
                            <input type="tel" class="tels" type="number" placeholder="Telefono*" name="telefonomen1" required id="telefono">
                        </div>
                        <div class="campo">
                            <input type="text" placeholder="Correo electronico*" name="correomen1" required id="emailmensaje">
                        </div>
                        <div class="campo">
                            <textarea placeholder="Mensaje*" name="mensajemen1" required id="mensajeescrito" style="resize:none;"></textarea>
                        </div>
                        <div class="divBotEnviar">
                            <button class="enviar" id="botonenviarmensaje">Enviar Mensaje</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="pie_pag">
        <div class="servicios_footer">
            <section class="servi_foot" id="sect_f1">
                <h2>Sueño Intimo</h2>
                <p>Un pequeño Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos facilis reprehenderit</p>
                <p>Otro pequeño Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos facilis reprehenderit</p>
                <hr class="linea_divisoria" id="linea_div1">
            </section>
            <section class="servi_foot" id="sect_f2">
                <h2>Contactarse con Nosotros</h2>
                <div class="sect_foot">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_footer" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="3 9 12 15 21 9 12 3 3 9" />
                        <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <line x1="3" y1="19" x2="9" y2="13" />
                        <line x1="15" y1="13" x2="21" y2="19" />
                    </svg>
                    <h3>mail@mail.com</h3>
                </div>
                <div class="sect_foot">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_footer" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="7" y="4" width="10" height="16" rx="1" />
                        <line x1="11" y1="5" x2="13" y2="5" />
                        <line x1="12" y1="17" x2="12" y2="17.01" />
                    </svg>
                    <h3>+57 316 659 8672</h3>
                </div>

                <div class="sect_foot">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono_footer" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21h7v-3a2 2 0 0 1 4 0v3h7" />
                        <line x1="6" y1="21" x2="6" y2="12" />
                        <line x1="18" y1="21" x2="18" y2="12" />
                        <path d="M6 12h12a3 3 0 0 0 3 -3a9 8 0 0 1 -9 -6a9 8 0 0 1 -9 6a3 3 0 0 0 3 3" />
                    </svg>
                    <h3>Carrera 11 #14sur - 37</h3>
                </div>
                <hr class="linea_divisoria" id="linea_div2">
            </section>
            <section class="servi_foot" id="sect_f3">
                <h2>Medios de Pago</h2>
                <div class="sect_foot">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <ellipse cx="16" cy="6" rx="5" ry="3" />
                    <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M5 15v1m0 -8v1" />
                    </svg>
                    <h3>Pago1</h3>
                </div>
                <div class="sect_foot">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-paypal" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a0.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                  </svg>
                    <h3>Pago2</h3>
                </div>
                <div class="sect_foot">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="4" width="18" height="16" rx="3" />
                    <circle cx="9" cy="10" r="2" />
                    <line x1="15" y1="8" x2="17" y2="8" />
                    <line x1="15" y1="12" x2="17" y2="12" />
                    <line x1="7" y1="16" x2="17" y2="16" />
                  </svg>
                    <h3>Pago3</h3>
                </div>
            </section>
        </div>
    </footer>
    <div class="sub_footer">
        <p>Todos los derechos reservados Sueño Intimo ©</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/scripts1.js"></script>
</body>

</html>