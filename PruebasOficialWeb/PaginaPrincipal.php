<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../ProyectoOficial/FooterStyle.css" rel="stylesheet" type="text/css"/>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #ffffff;
                margin: 0;
                padding: 0;
            }
        </style>
        <style>
            
            .titulos{
                background: rgba(135, 206, 235, 0.7); /* Fondo con desvanecido celeste */
                margin: 0;
                padding: 0;
                height: 340px;
            }

            .container20 {
                display: flex;
                margin: 20px;
            }

            .column {
                flex: 1;
                padding: 20px;
                margin: 10px;
            }

            .column:first-child {
                margin-left: 0;
            }

            .column h1 {
                font-size: 40px;
                color: #333;
                margin-bottom: 10px;
            }
            .column h2 {
                font-size: 24px;
                color: #333;
                margin-bottom: 10px;
            }

            .column p {
                font-size: 16px;
                color: #666;
            }

            .column ul {
                list-style-type: disc;
                font-size: 16px;
                color: #666;
                padding-left: 20px;
            }
        </style>
        <style>
            .services {
                margin: 0;
                padding: 0;
                height: 400px;

            }

            .cajas {
                display: flex;
                justify-content: space-between;
                margin: 20px;
            }

            .box {
                flex: 1;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                text-align: center;
                transition: background-color 0.5s, color 0.5s, transform 0.2s;
                margin: 10px;
            }

            .box:hover {
                background: linear-gradient(to top, #007bff, #00bfff);
                color: white;
                transform: translateY(-5px);
            }

            .box h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .box p {
                font-size: 16px;
            }
        </style>
        <style>
            .numeros {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }

            .container2 {
                display: flex;
                justify-content: space-between;
                margin: 20px;
            }

            .column2 {
                flex: 1;
                padding: 20px;
                text-align: center;
            }

            .number {
                font-size: 36px;
                font-weight: bold;
                color: #007bff;
            }

            .description {
                font-size: 16px;
                color: #333;
            }
        </style>
        <style>
            .contacto2 {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container5 {
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                display: flex;
            }

            .cta-box {
                background: rgba(135, 206, 235, 0.7); /* Fondo con desvanecido celeste */
                padding: 20px;
                text-align: center;
                border-radius: 10px;
            }

            .cta-title {
                font-size: 24px;
                color: white;
            }

            .cta-content {
                font-size: 16px;
                color: white;
            }

            .cta-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                font-size: 16px;
                text-decoration: none;
                border-radius: 10px;
            }
        </style>
        <style>
            .portafolio {
                margin: 0;
                padding: 0;
            }

            .container8 {
                text-align: center;
                padding: 20px;
            }

            .options {
                margin-bottom: 20px;
            }

            .options button {
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                margin: 5px;
                cursor: pointer;
            }

            .imagesportafolio {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .imagesportafolio img {
                width: 30%;
                margin: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
        </style>
        <style>
            .contacto {
                margin: 0;
                padding: 0;
            }

            .container9 {
                text-align: center;
                padding: 20px;
                background-color: #ddd;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .column5 {
                flex: 1;
                padding: 10px;
            }

            .map {
                height: 300px; /* Ajusta la altura del mapa según tus necesidades */
                background-color: #f2f2f2; /* Color de fondo para el área del mapa */
            }

            .contact-form {
                padding: 20px;
                border-radius: 5px;
            }

            .contact-form input,
            .contact-form textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            .contact-form button {
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
            }
        </style>


    </head>
    <body>

        <section class="titulos">
            <div class="container20">
                <div class="column">
                    <h1>Encuentra la Autenticidad</h1>
                    <p>Te garantizamos que todas las zapatillas son auténticas y originales. No tienes que preocuparte por imitaciones o falsificaciones. La calidad y la autenticidad son nuestra prioridad.</p>

                </div>

                <div class="column">
                    <h2>Estilo y Comodidad Se Unen</h2>
                    <p>Ofrecemos una cuidadosa selección de zapatillas originales que combinan estilo y comodidad. Encontrarás las mejores opciones para lucir bien y sentirte cómodo a la vez.</p>
                    <h2>Exclusividad a Tus Pies</h2>
                    <p>Ofrecemos acceso a zapatillas originales de edición limitada que no encontrarás en otros lugares. Destácate con modelos únicos que son difíciles de conseguir en otros sitios.</p>
                </div>

                <div class="column">
                    <h2>Asesoramiento Personalizado</h2>
                    <p>Nuestro equipo está listo para ofrecerte asesoramiento personalizado. Te ayudaremos a elegir las zapatillas que mejor se adapten a tus gustos, necesidades y estilo de vida.</p>
                    <h2>Confianza y Garantía</h2>
                    <p>Comprar en nuestra tienda te brinda la confianza de saber que estás invirtiendo en zapatillas de alta calidad. Además, ofrecemos garantías que respaldan tu compra y tu satisfacción.</p>
                </div>
            </div>
        </section>
        <section class="services">
            <h1 style="text-align: center;">Las Mejores Marcas en Nuestra Tienda</h1>
            <p style="text-align: center; margin-left: 100px; margin-right: 100px; line-height: 2em;">En nuestra tienda, nos enorgullece ofrecer una selección excepcional de zapatillas de las mejores marcas del mercado. Creemos que la calidad es esencial cuando se trata de calzado, y es por eso que nos comprometemos a proporcionar a nuestros clientes opciones que cumplan con los más altos estándares.</p>
            <div class="cajas">
                <div class="box">
                    <img style="height: 40px;" src="images/Adidas_Logo.svg.png" alt=""/>
                    <h2>Adidas</h2>
                    <p>Adidas ofrece una amplia gama de ropa deportiva y de estilo de vida.</p>
                </div>

                <div class="box">
                    <img style="height: 40px;" src="Imagenes/33e63d5adb0da6b303a83901c8e8463a.png" alt=""/>
                    <h2>Nike</h2>
                    <p>Nike es conocida por su ropa deportiva innovadora y elegante.</p>
                </div>

                <div class="box">
                    <img style="height: 40px;" src="Imagenes/Reebok_2019_logo.svg.png" alt=""/>
                    <h2>Reebok</h2>
                    <p>Reebok es conocida por su ropa deportiva versátil.</p>
                </div>

                <div class="box">
                    <img style="height: 40px;" src="Imagenes/Puma-Logo.png" alt=""/>
                    <h2>Puma</h2>
                    <p>Puma ofrece ropa deportiva y urbana con un enfoque en la comodidad y el estilo.</p>
                </div>
            </div>
        </section>
        <section class="numeros">
            <div class="container2">
                <div class="column2">
                    <div class="number" id="clients">0</div>
                    <div class="description">Productos disponibles</div>
                </div>

                <div class="column2">
                    <div class="number" id="projects">0</div>
                    <div class="description">Productos en tienda</div>
                </div>

                <div class="column2">
                    <div class="number" id="support">0</div>
                    <div class="description">Clientes satisfechos</div>
                </div>

                <div class="column2">
                    <div class="number" id="workers">0</div>
                    <div class="description">Locales a nivel nacional</div>
                </div>
            </div>
        </section>
        <script>
            function startCounting(targetId, endValue, duration) {
                let currentNumber = 0;
                const targetElement = document.getElementById(targetId);
                const increment = endValue / duration;

                const interval = setInterval(function () {
                    currentNumber += increment;
                    if (currentNumber >= endValue) {
                        currentNumber = endValue;
                        clearInterval(interval);
                    }
                    targetElement.textContent = Math.round(currentNumber);
                }, 1000 / duration);
            }

            // Determina un valor de duración que garantice que todos los números lleguen al mismo tiempo.
            const duration = 10; // Por ejemplo, 10 segundos.

            startCounting("clients", 232, duration);
            startCounting("projects", 521, duration);
            startCounting("support", 1463, duration);
            startCounting("workers", 15, duration);
        </script>
    <secction class="contacto2">
        <div class="container5">
            <div class="cta-box">
                <h2 class="cta-title">Comunicate con nosotros</h2>
                <p class="cta-content" style="text-align: center; margin-left: 100px; margin-right: 100px; line-height: 2em;">¿Interesado en conocer más acerca de nuestros productos? ¡Estamos aquí para ayudarte! Comunícate con nosotros a través de nuestro canal de WhatsApp y te proporcionaremos toda la información que necesitas. Estamos listos para responder tus preguntas y brindarte asistencia personalizada. ¡No dudes en contactarnos para descubrir nuestra selección de productos y ofertas especiales!</p>
                <a href="#" class="cta-button">WhatsApp</a>
            </div>
        </div>
    </secction>
    <secction class="portafolio">
        <div class="container8">
            <h2 style="text-align: center;">Portfolio</h2>
            <p style="text-align: center; margin-left: 100px; margin-right: 100px; line-height: 2em;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            <div class="options">
                <button class="filter" data-filter="all">Todas</button>
                <button class="filter" data-filter="Nike">Nike</button>
                <button class="filter" data-filter="Adidas">Adidas</button>
                <button class="filter" data-filter="Reebok">Reebok</button>
                <button class="filter" data-filter="Puma">Puma</button>
            </div>
            <div class="imagesportafolio">
                <img class="item all Nike" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Air Max Sc Sportswear para Hombre.jpg" alt=""/>
                <img class="item all Adidas" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Court Legacy Cnvs Sportswear para Hombre 2.jpg" alt=""/>
                <img class="item all Reebok" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Court Legacy Cnvs Sportswear para Hombre.jpg" alt=""/>
                <img class="item all Nike" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Court Legacy Nn Sportswear para Hombre.jpg" alt=""/>
                <img class="item all Puma" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Nike Air More Uptempo Bt Sportswear para Bebé.jpg" alt=""/>
                <img class="item all Reebok" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Nike Court Legacy Cnvs Sportswear para Hombre.jpg" alt=""/>
                <img class="item all Nike" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Nike Gts 97 Sportswear para Hombre.jpg" alt=""/>
                <img class="item all Adidas" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Nike Renew Elevate Ii Basketball para Hombre.jpg" alt=""/>
                <img class="item all Puma" src="Imagenes/Nike/Zapatillas/Zapatillas Nike Nike Star Runner 3 Sdwlk (Tdv) Sportswear para Bebé.jpg" alt=""/>
            </div>
        </div>
    </secction>
    <script>
        const filterButtons = document.querySelectorAll(".filter");
        const images = document.querySelectorAll(".item");

        filterButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const filterValue = button.getAttribute("data-filter");
                images.forEach((image) => {
                    image.style.display = "none";
                    if (image.classList.contains(filterValue) || filterValue === "all") {
                        image.style.display = "block";
                    }
                });
            });
        });
    </script>
    <section class="contacto">
        <div class="container9">
            <h2>Contact</h2>
            <div class="row">
                <div class="column5">
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                </div>
                <div class="column5">
                    <div class="contact-form">
                        <h3>Contact Form</h3>
                        <form>
                            <input type="text" placeholder="Name" required>
                            <input type="email" placeholder="Email" required>
                            <textarea placeholder="Message" rows="4" required></textarea>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column5">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3902.7218728721523!2d-77.0611138!3d-11.9937368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce543477f8d9%3A0x9d64f6794789376b!2sMegaPlaza!5e0!3m2!1ses-419!2spe!4v1698091548816!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

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
<script>
    $(document).ready(function () {
        $('#itemslider-featured').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>

</html>
