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
                <h1 class="titulo">Taller Univalle <span>WWW</span></h1>
                <div class="cab">
                    <nav id="navegar">
                        <a href="../index.html" id="btninicio">Inicio</a>
                        <a href="#servic" id="btnclien">Catalogo</a>
                        <a href="#contac2" id="btncontac">Contacto</a>
                        <a href="login.php" id="btnlog">Logeo</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main class="contenedor">
        <section class="contacto1" id="contac1">
            <form class="formulario" id="formulario1" method="post">
                <fieldset>
                    <div class="iconos1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fc8dc8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          </svg>
                    </div>
                    <h3>Ingresa con tu cuenta</h3>
                    <div class="contener-campos">
                        <div class="campo" id="nombrelogeo" style="display: none;">
                            <label>Nombre</label>
                            <input type="text" placeholder="Nombre*" name="nombrelog1" id="nombrelog">
                        </div>
                        <div class="campo">
                            <label>Email</label>
                            <input type="tel" placeholder="Email*" name="emaillogeo1"  id="emaillogeo">
                        </div>
                        <div class="campo">
                            <label id="">Contraseña</label>
                            <input type="password" placeholder="Contraseña*" name="contraseñalogeo1"  id="contraseñalogeo">
                        </div>
                        <div class="botones">
                            <div class="enviar1" id="botonregistro">
                            <span>Registrarse</span>
                            </div>
                            <div class="enviar1" id="botonlogeo">
                            <span>Iniciar Sesion</span>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="pie">
        <p>Todos los derechos reservados ADaraviña</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/scriptslogeo.js"></script>
</body>
</html>