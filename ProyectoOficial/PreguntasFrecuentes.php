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
        <script src="PreguntasFrecuentes.js" type="text/javascript"></script>
        <link href="PreguntasFrecuentes.css" rel="stylesheet" type="text/css"/>
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

            <h2>PAGOS Y REEMBOLSOS</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('18')">
                <h3>1. &iquest;Cu&aacute;les son las formas de pago aceptadas?</h3>
                <div id="18" class="contenido-oculto">
                    <p>Tenemos disponibles las siguientes opciones de pago:</p>
                    <p>1. Tarjetas de Cr&eacute;dito y d&eacute;bito: Visa, MasterCard, American Express y Dinners. No nos hacemos responsables de las posibles comisiones que los operadores de tarjetas de cr&eacute;dito puedan aplicar.</p>
                    <p>2. Pago Efectivo:</p>
                    <p>Banca por internet o m&oacute;vil: Paga por internet v&iacute;a transferencia bancaria desde tu m&oacute;vil o home banking. Tienes 9 horas para pagar desde tu cuenta a trav&eacute;s de la banca por internet del BCP, Interbank, BBVA, Scotiabank, Banbif o Caja Arequipa.</p>
                    <p>&nbsp;</p>
                    <p>Agentes y Agencias: Realiza dep&oacute;sitos en efectivo en agencias, agentes o bodegas m&aacute;s cercanas a nivel nacional. Tienes 9 horas para pagar en efectivo de manera presencial en las agencias y/o agentes de BCP, Interbank, BBVA, Scotiabank, Banbif, Caja Arequipa, Western Union, Tambo, Kasnet, Full Carga, Red Digital, Money Gram o Disashop.</p>
                    <p>En caso no hayas pagado tu pedido antes de la fecha de vencimiento, este ser&aacute; cancelado y los productos que elegiste estar&aacute;n disponibles para la venta nuevamente en nuestra p&aacute;gina web.</p>
                    <p>Ten en cuenta que tu compra se confirma autom&aacute;ticamente en nuestra p&aacute;gina web.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('19')">
                <h3>2. &iquest;C&oacute;mo puedo saber si mi pago fue exitoso?</h3>
                <div id="19" class="contenido-oculto">
                    <p>En el momento que finalices tu compra recibir&aacute;s una confirmaci&oacute;n del pedido v&iacute;a correo electr&oacute;nico confirmado los productos adquiridos as&iacute; como el n&uacute;mero asignado a tu pedido, si tienes alguna duda del proceso puedes comunicarte a nuestro centro de intenci&oacute;n a clientes Tel&eacute;fono: 998-377-361 donde con gusto un asesor te ayudara.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('20')">
                <h3>3. &iquest;Cu&aacute;nto tiempo tengo para concretar mi pago si es en efectivo?</h3>
                <div id="20" class="contenido-oculto">
                    <p>Tendr&aacute;s solamente 24 horas para poder concretar tu pago en efectivo sin embargo esperamos que este se realice a la brevedad posible para no retrasar tu compra.</p>
                </div>
            </div>

            <h2>NAVEGACI&Oacute;N</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('21')">
                <h3>1. &iquest;C&oacute;mo puedo resolver los problemas de visualizaci&oacute;n de la tienda Runa Store online?</h3>
                <div id="21" class="contenido-oculto">
                    <p>Si tiene problemas de visualizaci&oacute;n en la tienda Runa Store online, intenta solucionarlos borrando las cookies y los archivos temporales de internet. Esto deber&iacute;a solucionar los problemas de visualizaci&oacute;n. Por favor, aseg&uacute;rese de que las cookies est&aacute;n habilitadas. Necesita tener alguno de los siguientes navegadores: Internet Explorer, Firefox o Google Chrome.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('22')">
                <h3>2. &iquest;C&oacute;mo hago cambios en mi carrito?</h3>
                <div id="22" class="contenido-oculto">
                    <p>Dentro de la tienda online, es posible realizar cambios en los productos que ha agregado a "mi carrito"</p>
                    <ul class="disc">
                        <li>Actualizar la cantidad. Introduce una cantidad y haz clic en "actualizar".</li>
                        <li>Eliminar un producto del carrito. Para eliminar un producto, haz clic en el icono "X" o cambia la cantidad a cero y haz clic en "actualizar".</li>
                        <li>Agregar mas productos. Si quieres seguir comprando, puedes utilizar tu carrito para almacenar los productos que quieres comprar. Haz clic en "Agregar mas productos" para seguir buscando productos. En cualquier momento de tu compra, puedes volver al carrito haciendo clic en el icono del carrito de la parte superior de nuestra p&aacute;gina.</li>
                    </ul>                
                </div>
            </div>

            <h2>QUEJAS Y SUGERENCIAS</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('23')">
                <h3>1. &iquest;Por qu&eacute; si vivo en alguna provincia debo esperar m&aacute;s tiempo para la entrega de mi pedido?</h3>
                <div id="23" class="contenido-oculto">
                    <p>A pesar de que nuestro socio log&iacute;stico iniciara el proceso de despacho a la brevedad posible en algunas zonas de provincia se utilizara un transportista espec&iacute;fico para la entrega lo que aplaza la entrega de tu pedido.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('24')">
                <h3>2. &iquest;Puedo solicitar que mi pedido sea entregado en servicio urgente aunque tenga que pagar adicional?</h3>
                <div id="24" class="contenido-oculto">
                    <p>Lamentablemente nuestro convenio con el socio log&iacute;stico no contempla servicio urgente.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('25')">
                <h3>3. Al momento de realizar mi compra yo vi el art&iacute;culo disponible, &iquest;Por qu&eacute; me dicen que no hay existencias para mi despacho?</h3>
                <div id="25" class="contenido-oculto">
                    <p>Es importante tomar en cuenta que la existencia de art&iacute;culos es actualizada constantemente en funci&oacute;n de las &oacute;rdenes generadas; por ello te invitamos a concretar tu pago a la brevedad para asegurar el despacho completo de tu pedido.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('26')">
                <h3>4. &iquest;Es posible aportar la diferencia de un art&iacute;culo sustituto en mi orden?</h3>
                <div id="26" class="contenido-oculto">
                    <p>Por cuestiones de facturaci&oacute;n es debes tomar en cuenta que en caso de ser ofrecido un articulo sustituto debe ajustarse al monto inicial de tu orden, lo que nos impide captar un monto adicional para un art&iacute;culo que sobre dicho monto.</p>
                </div>
            </div>


            <h2>INFORMACI&Oacute;N DE PRODUCTOS</h2>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('27')">
                <h3>1. &iquest;C&oacute;mo encuentro el producto que estoy buscando?</h3>
                <div id="27" class="contenido-oculto">
                    <p>Si necesitas ayuda para encontrar un producto, utiliza nuestro buscador de productos situado en la parte superior de nuestra p&aacute;gina. Solo tienes que introducir una o m&aacute;s palabras clave o un n&uacute;mero de art&iacute;culo en el campo de b&uacute;squeda y presionar la tecla "Enter". En la p&aacute;gina se mostrar&aacute;n los resultados de la b&uacute;squeda acompa&ntilde;ados de links a productos o grupos de productos. Puedes redefinir tu b&uacute;squeda seleccionando varias categor&iacute;as en la parte izquierda de la p&aacute;gina de los resultados de b&uacute;squeda, por ejemplo, sexo, deporte, precio, talla o incluso color.</p>
                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('28')">
                <h3>2. Consejos de b&uacute;squeda:</h3>
                <div id="28" class="contenido-oculto">
                    <p>Compruebe la ortograf&iacute;a: obtendr&aacute;s resultados de b&uacute;squeda m&aacute;s precisos.</p>
                    <p>Utiliza m&aacute;s de una palabra para buscar tipos de producto espec&iacute;ficos, por ejemplo, "zapatillas nike". Despu&eacute;s podr&aacute; redefinir su b&uacute;squeda con criterios relativos al sexo o al precio.</p>

                </div>
            </div>

            <div class="preguntas-frecuentes" onclick="toggleFAQ('29')">
                <h3>3. &iquest;Est&aacute; disponible la opci&oacute;n para personalizar art&iacute;culos en la p&aacute;gina online?</h3>
                <div id="29" class="contenido-oculto">
                    <p>Lamentablemente esta modalidad no se encuentra disponible, los art&iacute;culos mostrados son de l&iacute;nea y no tenemos habilitada la opci&oacute;n de realizar alg&uacute;n personalizaci&oacute;n.</p>
                </div>
            </div>
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
