<!DOCTYPE html>
<html>
    <head>
        <title>Advanced Side Menu</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;

            }

            .sidebar {
                width: 60px;
                height: 100%;
                background-color: #222;
                padding: 20px;
                box-sizing: border-box;
                color: #fff;
                overflow: hidden;
                transition: width .75s ease;
                position: fixed;
            }

            .sidebar:hover {
                width: 200px;
            }

            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-direction: column;
                row-gap: 1rem;
            }

            li {
                padding: 10px 10px;
                border-bottom: 1px solid #444;
                border-radius: .5rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            li:hover {
                background-color: #444;
            }

            .nav-link {
                display: inline-flex;
                column-gap: 1rem;
                color: inherit;
                text-decoration: none;
            }

            .item-txt {
                padding-left: .5rem;
            }

            /* Estilo para Logo1.png (logo cerrado) */
            .logo-cerrado {
                width: 40px; /* Tamaño deseado para Logo1 */
                height: 40px; /* Esto mantiene la proporción original de la imagen */
            }

            /* Estilo para Logo2.png (logo abierto) */
            .logo-abierto {
                width: auto; /* Tamaño deseado para Logo2 */
                height: 40px; /* Esto mantiene la proporción original de la imagen */
            }
            .sidebar .services:hover .sub-menu {
        display: block;
    }

    /* Agregamos un estilo específico para el submenú */
    .sub-menu {
        display: none;
        margin-left: 20px; /* Espacio para indicar que es un submenú */
    }

    /* Cambiamos el color de las letras a blanco y quitamos el subrayado */
    .sidebar ul li a {
        text-decoration: none;
        color: #fff;
    }
    .container {
                margin-left: 60px; /* Margen inicial igual al ancho de la barra */
                background-color: #fff;
                padding: 20px;
                box-sizing: border-box;
                transition: margin-left 0.75s ease; /* Transición para el margen */
            }


            @media (max-width: 768px) {
                .container {
                    width: 350px;
                }
            }
        </style>
        <style>


            .container p {
                margin: 10px 0;
            }

            .container strong {
                font-weight: bold;
            }

            .container ul {
                list-style-type: disc;
                padding-left: 20px;
            }

            .container li {
                margin-left: 20px;
            }


            /* Estilo para el contenido dentro de la casilla */
            .container * {
                text-align: left; /* Justificar a la izquierda */
                margin: 20px; /* Margen entre el contenido y los bordes de la casilla */
            }



            .preguntas-frecuentes {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                margin-bottom: 20px;
            }

            .preguntas-frecuentes h2 {
                font-size: 24px;
                margin-bottom: 20px;
                cursor: pointer; /* Agregamos un cursor de puntero para indicar que es interactivo */
            }

            .preguntas-frecuentes p {
                margin-bottom: 10px;
            }

            /* Estilos para el contenido oculto */
            .contenido-oculto {
                display: none;
            }

            .contenido-oculto.mostrado {
                display: block;
            }
            .titulo {
                font-size: 40px;
                font-weight: bold;
                margin-bottom: 10px;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <div class="sidebar">
            <div class="header-logo">
                <img src="Logo1.png" alt="Logo Cerrado" class="logo-cerrado"/>
            </div>
            <ul>
                <li><a href="#" class="nav-link">
                        <span class="item-icon">
                            <i class='bx bxs-home'></i>
                        </span>
                        <span class="item-txt">
                            Home
                        </span>
                    </a></li>
                <li><a href="#" class="nav-link">
                        <span class="item-icon">
                            <i class='bx bxs-info-circle'></i>
                        </span>
                        <span class "item-txt">
                            About
                        </span>
                    </a></li>
                <li class="services">
                    <a href="#" class="nav-link">
                        <span class="item-icon">
                            <i class='bx bx-task'></i>
                        </span>
                        <span class="item-txt">
                            Services
                        </span>
                    </a>
                    <ul class="sub-menu"> <!-- Agregamos un submenú -->
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                    </ul>
                </li>
                <li><a href="#" class="nav-link">
                        <span class="item-icon">
                            <i class='bx bxs-contact'></i>
                        </span>
                        <span class="item-txt">
                            Contact
                        </span>
                    </a></li>
            </ul>
        </div>
        <div class="container">
            <h1 class="titulo">PREGUNTAS FRECUENTES</h1>

            <h2>CUPONES</h2>
            <div class="preguntas-frecuentes" onclick="toggleFAQ('1')">
                <h3>1. Apliqu&eacute; un c&oacute;digo promocional en un pedido que devolv&iacute; &iquest;Puedo volver a utilizar ese c&oacute;digo para una nueva compra?</h3>
                <div id="1" class="contenido-oculto">
                    <p>Si has cancelado o devuelto un pedido en el que se ha utilizado un c&oacute;digo promocional, el valor de dicho c&oacute;digo no ser&aacute; reembolsado y tampoco podr&aacute;s utilizarlo en un nuevo pedido.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('2')">
                <h3>2. &iquest;C&oacute;mo utilizar mi cup&oacute;n de descuento?</h3>
                <div id="2" class="contenido-oculto">
                    <p>Una vez agregados todos los productos en "tu carrito de compras" veras disponible el campo "&iquest;Tienes un cup&oacute;n?&rdquo; donde con solo ingresarlo podr&aacute;s utilizar tu cup&oacute;n. En la pantalla de "resumen de pedido" deber&aacute; mostrarse el descuento aplicado y el total a pagar.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('3')">
                <h3>3. Ya confirm&eacute; mi compra pero olvid&eacute; aplicar mi cup&oacute;n promocional.</h3>
                <div id="3" class="contenido-oculto">
                    <p>Lamentablemente no podemos aplicar ning&uacute;n tipo de descuento despu&eacute;s de confirmar la compra, por ello es sumamente importante verificar todos los datos y montos en el resumen de tu compra antes de concluirla.</p>
                </div>
            </div>

            <h2>NEWSLETTER - CUENTA</h2>
            <div class="preguntas-frecuentes" onclick="toggleFAQ('4')">
                <h3>1. &iquest;Por qu&eacute; no puedo entrar a mi cuenta si ya estoy registrado en la tienda?</h3>
                <div id="4" class="contenido-oculto">
                    <p>Si no has podido acceder, te sugerimos primeramente solicitar una recuperaci&oacute;n de la clave de ingreso, en la opci&oacute;n "&iquest;has olvidado la contrase&ntilde;a?" que aparece debajo del campo contrase&ntilde;a.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('5')">
                <h3>2. &iquest;Tengo que registrarme para comprar algo en la tienda online de Runa Store?</h3>
                <div id="5" class="contenido-oculto">
                    <p>Registrarse no es necesario. Puedes realizar un pedido en la tienda online como invitado, pero, si planeas hacer compras de manera regular, te recomendamos registrarte ya que te ahorrar&aacute; tiempo cuando vuelvas a hacer un pedido en la tienda online de Runa Store.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('6')">
                <h3>3. &iquest;C&oacute;mo realizo el seguimiento de mi pedido?</h3>
                <div id="6" class="contenido-oculto">
                    <p>Puedes realizar el seguimiento de tu pedido accediendo a su historial de pedidos en el apartado &ldquo;Mi cuenta&rdquo;. Ir a los detalles del pedido desea seguir y dar clic en el n&uacute;mero de seguimiento en la columna "Ver Pedido".</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('7')">
                <h3>4. &iquest;Qu&eacute; necesito para suscribirme al Newsletter?</h3>
                <div id="7" class="contenido-oculto">
                    <p>Es muy F&aacute;cil suscribirte a nuestro Newsletter; solo necesitas ingresar tu correo electr&oacute;nico y aceptar los t&eacute;rminos y condiciones, y la pol&iacute;ticas de privacidad para recibir notificaciones de nuestras promociones y ventas exclusivas.</p>
                </div>
            </div>

            <h2>CONSULTA DE DEVOLUCIONES</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('8')">
                <h3>1. &iquest;Cu&aacute;nto tiempo tengo para solicitar la devoluci&oacute;n?</h3>
                <div id="8" class="contenido-oculto">
                    <p>Usted tendr&aacute; un lapso de 10 d&iacute;as h&aacute;biles a partir del d&iacute;a en que se entreg&oacute; su pedido.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('9')">
                <h3>2. &iquest;Cu&aacute;les son las instrucciones para la devoluci&oacute;n de un producto?</h3>
                <div id="9" class="contenido-oculto">
                    <p>Para devolver un producto, sigue los siguientes pasos:</p>
                    <ul class="disc">
                        <li>1.- Env&iacute;anos un correo a devoluciones@runastore.pe e ind&iacute;canos tu n&uacute;mero de pedido, el c&oacute;digo del producto que deseas devolver. Los productos devueltos por falla deben ser entregados en la tienda Runa Store de Av. Paseo de la Republica 395 2do pido - La Victoria, Lima, Lima en el horario lunes a s&aacute;bado de 10:00 a 18:00 (en caso de provincia el recojo se realiza a trav&eacute;s de nuestro operador log&iacute;stico en la direcci&oacute;n declarada en el momento de la compra en un horario de lunes a s&aacute;bado de 8:00am a 6:00pm con Urbano Express u otro operador log&iacute;stico asignado por Runa Store). El paquete debe ser embalado en su caja de entregado o en otra envoltura correctamente encintado y con un r&oacute;tulo (papel) pegado en el paquete donde se indique los datos del pedido y el motivo de devoluci&oacute;n.</li>
                        <li>2.- Posteriormente procederemos con la revisi&oacute;n de la presunta falla. Debes verificar que los art&iacute;culos contengan su empaque, embalaje y etiquetas originales y de que todos los art&iacute;culos de ropa o calzado llevan las etiquetas originales.</li>
                        <li>3.- Si deseas contactarte con nuestra l&iacute;nea de atenci&oacute;n 998-377-361 verifica previamente que cuentas con la siguiente informaci&oacute;n a la mano: N&uacute;mero de pedido, Fecha del pedido, Direcci&oacute;n de entrega, N&uacute;mero de tel&eacute;fono y Boleta o factura seg&uacute;n corresponda</li>
                    </ul>                
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('10')">
                <h3>3. &iquest;A d&oacute;nde debo comunicarme para iniciar un proceso de devoluci&oacute;n?</h3>
                <div id="10" class="contenido-oculto">
                    <p>Puedes ponerte en contacto mediante nuestro centro de Servicio al cliente, marcando 998-377-361 o bien, enviarnos un correo electr&oacute;nico a la direcci&oacute;n devoluciones@runastore.pe</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('11')">
                <h3>4. Quiero un reembolso de dinero, &iquest;C&oacute;mo se realiza el proceso?</h3>
                <div id="11" class="contenido-oculto">
                    <p>Para los reembolsos/extornos de dinero por compras devueltas se realizar&aacute;n seg&uacute;n los t&eacute;rminos y condiciones de cada proveedor de la pasarela de pago (ver numeral 5 y 6 de t&eacute;rminos y condiciones). El tiempo que tomar&aacute; el proceso de devoluci&oacute;n es aproximadamente entre en 25 d&iacute;as h&aacute;biles contados desde el d&iacute;a que el cliente realiza la devoluci&oacute;n del producto y Runa Store realiza la validaci&oacute;n del estado del producto. Sin embargo, podr&iacute;a ser que su banco o la entidad emisora de su tarjeta de cr&eacute;dito o d&eacute;bito puedan necesitar m&aacute;s tiempo para procesar el reembolso. Se recomienda contactarse al centro de atenci&oacute;n telef&oacute;nica de su banco para recibir informaci&oacute;n m&aacute;s precisa del estado de su extorno o reembolso.</p>
                </div>
            </div>


            <h2>CONSULTA DE PEDIDOS</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('12')">
                <h3>1. &iquest;Cu&aacute;nto tiempo tardar&eacute; en recibir mi pedido?</h3>
                <div id="12" class="contenido-oculto">
                    <p>Es importante tomar en cuenta que los tiempos normales de entrega para las ciudades de Per&uacute;, van de 1 a 10 d&iacute;as h&aacute;biles. Sin embargo, durante el periodo de rebajas los pedidos pueden tardar un poco m&aacute;s en ser procesados. Te sugerimos mantenerte al pendiente a trav&eacute;s de tu historial de pedidos en "Mi cuenta". Ah&iacute; podr&aacute; consultar detalles del pedido.</p>
                    <p>Para los pedidos realizados en alg&uacute;n d&iacute;a festivo, o el d&iacute;a anterior, el tiempo de entrega se ampliar&aacute; de acuerdo al volumen de ventas.</p>
                    <p>Por favor toma en cuenta las siguientes normas y restricciones de env&iacute;o:</p>
                    <ul class="disc">
                        <li>Los pedidos se env&iacute;an solo en d&iacute;as h&aacute;biles. Los d&iacute;as h&aacute;biles son de lunes a viernes, excluyendo los festivos nacionales de Per&uacute;.</li>
                        <li>No podemos realizar entregas en apartados de correos.</li>
                        <li>Todas las entregas ir&aacute;n acompa&ntilde;adas con un acuse de recibo.</li>
                        <li>No reembolsamos los costes de env&iacute;o en el caso de devoluci&oacute;n de art&iacute;culos.</li>
                        <li>Debido a dificultades log&iacute;sticas a la hora de realizar env&iacute;os a determinadas &aacute;reas remotas, nos reservamos el derecho a cancelar su pedido y/o a aplicar t&eacute;rminos y condiciones adicionales a dicho pedido (incluyendo, sin limitaci&oacute;n, la condici&oacute;n de que cada pedido alcance un importe m&iacute;nimo).</li>
                        <li>Tambi&eacute;n puedes ponerte en contacto con nosotros a trav&eacute;s de nuestro centro de atenci&oacute;n a clientes.</li>
                    </ul>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('13')">
                <h3>2. &iquest;Realic&eacute; mi compra y no he recibido el correo de confirmaci&oacute;n?</h3>
                <div id="13" class="contenido-oculto">
                    <p>Es importante mencionar que si el pago lo realizaste a trav&eacute;s de un pago en l&iacute;nea, el correo de confirmaci&oacute;n por parte de Runa Store lo estar&aacute; recibiendo dentro de un plazo de 72 horas, si este plazo se ha excedido y el correo de confirmaci&oacute;n a&uacute;n no lo recibes, te pedimos por favor te comuniques a nuestro centro de servicio a clientes, o bien enviar un correo electr&oacute;nico a ventas@runastore.pe, para que se pueda validar que la compra se haya realizado correctamente.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('14')">
                <h3>3. &iquest;Qu&eacute; tipo de e-mails puedo recibir en relaci&oacute;n a mi pedido?</h3>
                <div id="14" class="contenido-oculto">
                    <p>Despu&eacute;s de haber realizado tu pedido en la tienda Runa Store online, recibir&aacute;s los siguientes mensajes v&iacute;a e-mail:</p>
                    <ul class="disc">
                        <li>Confirmaci&oacute;n del pedido: Esto significa que tu pedido se ha realizado correctamente. En principio, deber&iacute;as recibir una confirmaci&oacute;n unos minutos despu&eacute;s de haber realizado tu pedido. Todos los pedidos est&aacute;n sujetos a disponibilidad. Si un art&iacute;culo no est&aacute; disponible despu&eacute;s de que hayas realizado tu pedido, nuestro servicio de atenci&oacute;n al cliente se pondr&aacute; en contacto contigo.</li>
                        <li>Env&iacute;o del pedido: Esto significa que tu pedido ha sido enviado desde nuestros almacenes y est&aacute; de camino. Te enviaremos este e-mail en cuanto tu pedido haya salido de nuestros almacenes.</li>
                    </ul>                
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('15')">
                <h3>4. &iquest;Por que se ha cancelado mi pedido?</h3>
                <div id="15" class="contenido-oculto">
                    <p>Estas son las razones por las cuales nuestros sistemas cancelaran autom&aacute;ticamente tu pedido:</p>
                    <ul class="disc">
                        <li>No realizaste el pago dentro del tiempo establecido.</li>
                        <li>El pago realizado no paso nuestros controles anti fraude.</li>
                        <li>Una vez despachado el pedido, si no logramos encontrarte en la direcci&oacute;n de entrega en los intentos que realiz&oacute; nuestro proveedor log&iacute;stico tu pedido ser&aacute; devuelto a nuestro almacen y procederemos al reembolso.</li>
                    </ul>                
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('16')">
                <h3>5. No me lleg&oacute; la factura de mi pedido, &iquest;C&oacute;mo la solicito?</h3>
                <div id="16" class="contenido-oculto">
                    <p>Para solicitar una copia de su Boleta es necesario que se ponga en contacto mediante nuestro centro de Servicio al cliente Runa Store, marcando el 998-377-361 o bien, env&iacute;anos un correo electr&oacute;nico a la direcci&oacute;n ventas@runastore.pe indicando el n&uacute;mero de su pedido.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('17')">
                <h3>6. Ya realice mi compra y deseo modificar la(s) talla(s) de mis articulo(s), &iquest;C&oacute;mo puedo hacerlo?</h3>
                <div id="17" class="contenido-oculto">
                    <p>En el momento de confirmar tu compra todos los datos incluidos, direcci&oacute;n de entrega, titular de la compra, art&iacute;culos y tallas no podr&aacute;n ser modificados.</p>
                </div>
            </div>
        </div>
        <script>
            function toggleFAQ(id) {
                var faq = document.getElementById(id);
                faq.classList.toggle("mostrado");
            }
        </script>
        <script>
            const sidebar = document.querySelector('.sidebar');
            const container = document.querySelector('.container');
            const logo = document.querySelector('.header-logo img');

            sidebar.addEventListener('mouseover', () => {
                container.style.marginLeft = '100px';
                logo.src = 'Logo2.png'; // Cambia al logo abierto
                logo.classList.remove('logo-cerrado');
                logo.classList.add('logo-abierto');
            });

            sidebar.addEventListener('mouseout', () => {
                container.style.marginLeft = '60px';
                logo.src = 'Logo1.png'; // Cambia al logo cerrado
                logo.classList.remove('logo-abierto');
                logo.classList.add('logo-cerrado');
            });

        </script>
    </body>
</html>
