
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="HeaderStyle.css" rel="stylesheet" type="text/css"/>
        <link href="FooterStyle.css" rel="stylesheet" type="text/css"/>
        <link href="LibroReclamaciones.css" rel="stylesheet" type="text/css"/>
        <script src="LibroReclamaciones.js" type="text/javascript"></script>

    </head>
    <body>
        <header>
            <div class="logo">
                <a href="PaginaPrincipal.php">
                    <img src="Imagenes/logo.png" alt="Logo"/>
                </a>
            </div>
            <ul class="main-menu">
                <li><a href="PaginaPrincipal.php">Inicio</a></li>
                <li>
                    <a href="#">Marcas</a>
                    <ul class="sub-menu">
                        <li><a href="#">Adidas</a></li>
                        <li><a href="principalprueba3.php">Nike</a></li>
                        <li><a href="#">Reebok</a></li>
                        <li><a href="#">Puma</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Servicios</a>
                    <ul class="sub-menu">
                        <li><a href="Tiendas.php">Tiendas</a></li>
                        <li><a href="subirproductos.php">Registrar Producto</a></li>
                        <li><a href="FormasEnvio.php">Formas de envio</a></li>
                    </ul>
                </li>
                <li><a href="LibroReclamaciones.php">Libro de reclamaciones</a></li>
                <li><a href="Login.php">Cerrar sesion</a></li>
            </ul>
        </header>
        <section class="privacidad">
            <h1>Agregar un nuevo producto</h1>
            <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre del producto:</label>
                <input type="text" name="nombre" id="nombre" required><br>

                <label for="precio">Precio del producto:</label>
                <input type="number" name="precio" id="precio" step="0.01" required><br>

                <label for="imagen">Imagen del producto (JPG o PNG, máximo 5MB):</label>
                <input type="file" name="imagen" id="imagen" accept=".jpg, .jpeg, .png" required><br>


                <input type="submit" value="Agregar producto">
            </form>
        </section>
        <footer>
            <div class="footer-column">
                <h2>RUNA STORE</h2>
                <ul>
                    <li><a href="#">Nuestra empresa</a></li>
                    <li><a href="#">Nuestras tiendas</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h2>SERVICIO AL CLIENTE</h2>
                <ul>
                    <li><a href="FormasEnvio.php">Formas de envío</a></li>
                    <li><a href="FormasPago.php">Formas de pago</a></li>
                    <li><a href="Deboluciones.php">Cambios y devoluciones</a></li>
                    <li><a href="Frecuente.php">Preguntas frecuentes</a></li>
                    <li><a href="Políticasdeprivacidad.php">Políticas de privacidad</a></li>
                    <li><a href="LibroReclamaciones.php">Libro de reclamaciones</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h2>CONTÁCTANOS</h2>
                <p>¿Tienes preguntas o sugerencias?</p>
                <p><a href="mailto:hola@runastore.pe">hola@runastore.pe</a></p>
                <p>¿Tienes preguntas o sugerencias?</p>
                <ul><li><a href="#">Formas de envío</a></li></ul>
            </div>
            <div class="footer-column">
                <h2>¿Necesitas ayuda? Escríbenos.</h2>
                <p>Teléfono: 998377361</p>
                <p>ESTAMOS AQUÍ PARA TÍ</p>
                <p>Lunes - Viernes 8:30am - 06:30pm</p>
                <p>Sábado 9:00am - 06:00pm</p>    </div>
        </footer>
    </body>
</html>
