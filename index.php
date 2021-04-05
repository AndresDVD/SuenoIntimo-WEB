
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
    <?php
        include_once('php/main.php') 
    ?>
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
                    <a href="html/cat1.php">Pijamas para acostarse</a>
                </section>
                <section class="servicio">
                    <img src="imgs/ej_cat2.jpg" alt="">
                    <a href="html/cat2.php">Pijamas para dormir</a>
                </section>
                <section class="servicio">
                    <img src="imgs/ej_cat3.jpg" alt="">
                    <a href="html/cat3.php">Pijamas para levantarse</a>
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
                    <h3>Transferencia Bancaria</h3>
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
                    <h3>Consignaciones</h3>
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