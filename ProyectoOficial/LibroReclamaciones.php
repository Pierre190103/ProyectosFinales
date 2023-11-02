
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
                        <li><a href="listadereclamos.php">Ver Reclamaciones</a></li>
                    </ul>
                </li>
                <li><a href="LibroReclamaciones.php">Libro de reclamaciones</a></li>
                <li><a href="Login.php">Cerrar sesion</a></li>
            </ul>
        </header>
        <section class="privacidad">
            <h1 class="titulo">LIBRO DE RECLAMACIONES VIRTUAL</h1>
            <p>Conforme a lo establecido en el Código de Protección y Defensa del Consumidor, esta institución cuenta con un Libro de Reclamaciones a su disposición.</p>

            <h2 class="titulo2">Información de la Empresa</h2>
            <p><span class="etiqueta">Razón Social:</span> Athletic Depor S.A.C.</p>
            <p><span class="etiqueta">RUC:</span> 20600302630</p>
            <p><span class="etiqueta">Dirección:</span> Av. Paseo de la Republica Nro. 395 - 2do piso, La Victoria, Lima</p>
            <p><span class="etiqueta">Fecha:</span> Viernes, 6 de Octubre del 2023</p>

            <h2 class="titulo2">HOJA DE RECLAMACIÓN Nº RV-010491</h2>
            <p><em>Recuerda que los campos con un (*) son obligatorios</em></p>

            <h3 class="titulo2">1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h3>
            <form action="conexcion_reclamaciones.php" method="post" enctype="multipart/form-data">
                <label for="nombres_apellidos">Nombres y Apellidos*</label>
                <input type="text" id="nombres_apellidos" name="nombres_apellidos" class="campo-entrada" required>

                <label for="correo">Correo electrónico*</label>
                <input type="email" id="correo" name="correo" class="campo-entrada" required>

                <label for="doc_identidad">Doc. de identidad*</label>
                <select id="doc_identidad" name="doc_identidad" class="campo-entrada" required>
                    <option value="">Selecciona una opción...</option>
                    <option value="DNI">DNI</option>
                    <option value="Carnet Extranjero">Carnet Extranjero</option> <!-- Corregido el typo aquí -->
                </select>

                <label for="nro_documento">Nº de Documento*</label>
                <input type="text" id="nro_documento" name="nro_documento" class="campo-entrada" required>

                <label for="telefono">Teléfono*</label>
                <input type="text" id="telefono" name="telefono" class="campo-entrada" required>

                <label for="departamento">Departamento*</label>
                <select id="departamento" name="departamento" class="campo-entrada" onchange="actualizarProvincias()" required>
                    <option value="">Por favor, seleccione</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Áncash">Áncash</option>
                </select>

                <label for="provincia">Provincia*</label>
                <select id="provincia" name="provincia" class="campo-entrada" onchange="actualizarCiudades()" required>
                    <option value="">Seleccione provincia</option>
                    <!-- Aquí puedes agregar las opciones para las provincias -->
                </select>

                <label for="ciudad">Ciudad*</label>
                <select id="ciudad" name="ciudad" class="campo-entrada" required>
                    <option value="">Seleccione ciudad</option>
                    <!-- Opciones de ciudades se generarán dinámicamente en función de la elección de la provincia -->
                </select>

                <label for="direccion">Dirección*</label>
                <input type="text" id="direccion" name="direccion" class="campo-entrada" required>



                <h3 class="titulo2">2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h3>
                <label for="producto_servicio">Producto o Servicio*</label>
                <select id="producto_servicio" name="producto_servicio" class="campo-entrada" required>
                    <option value="producto">Producto</option>
                    <option value="servicio">Servicio</option>
                </select>

                <label for="nro_pedido">Nº de pedido</label>
                <input type="text" id="nro_pedido" name="nro_pedido" class="campo-entrada">

                <label for="monto">Monto</label>
                <input type="text" id="monto" name="monto" class="campo-entrada">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="campo-entrada"></textarea>

                <h3 class="titulo2">3. DETALLE DE LA RECLAMACIÓN</h3>
                <label for="tipo_reclamo">Tipo de Reclamación*</label>
                <select id="tipo_reclamo" name="tipo_reclamo" class="campo-entrada" required>
                    <option value="reclamo">Reclamo</option>
                    <option value="queja">Queja</option>
                </select>

                <label for="descripcion_reclamo">Descripción*</label>
                <textarea id="descripcion_reclamo" name="descripcion_reclamo" class="campo-entrada" required></textarea>

                <label for="pedido_consumidor">Pedido del consumidor</label>
                <textarea id="pedido_consumidor" name="pedido_consumidor" class="campo-entrada"></textarea>

                <input type="file" id="foto" name="foto" class="campo-entrada" required>

                <button type="submit" class="boton">ENVIAR RECLAMACIÓN</button>
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
