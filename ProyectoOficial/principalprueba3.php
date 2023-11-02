
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="logotipo/png" href="Imagenes/logotipo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nike - Marcas | Runa Store</title>
        <link href="https://fonts.cdnfonts.com/css/woodland" rel="stylesheet">
        <style>
            header {
                background-color: #333;
                color: #fff;
                padding: 10px 0;
                display: flex;
                justify-content: space-between;
                width: 100%; /* Ancho del 100% */
            }

            /* Estilos para el logotipo */
            .logo {
                margin-left: 20px;
            }
            .logo img{
                width: 100px;
                height: 50px;
            }

            /* Estilos para el menú principal */
            .main-menu {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center; /* Centra verticalmente las opciones */
                margin-left: 20px; /* Añade margen izquierdo para separar del borde de la página */
                margin-right: 20px; /* Añade margen derecho para separar del borde de la página */
            }

            .main-menu > li {
                position: relative;
            }

            .main-menu > li:last-child {
                margin-right: 0;
            }

            .main-menu > li a {
                text-decoration: none;
                color: #fff;
                font-weight: bold;
                display: inline-block;
                padding: 10px 20px;
            }

            .main-menu > li:hover .sub-menu {
                display: block;
            }

            .main-menu > li:hover a {
                border-bottom: 2px solid #fff;
            }

            /* Estilos para los submenús */
            .sub-menu {
                display: none;
                position: absolute;
                background-color: #444;
                padding: 10px;
                top: 100%;
                left: 0;
                z-index: 1;
            }

            .sub-menu li {
                display: block;
                margin: 10px 0;
            }

            /* Estilos para los enlaces de los submenús */
            .sub-menu a {
                text-decoration: none;
                color: #fff;
                font-weight: bold;
            }
            *{
                box-sizing: border-box;

            }
            body {
                margin: 0;
                font-family: system-ui;
                background-color: #fff;
            }
            .MarcaZapatillas {
                width: 400px; /* Ancho del cuadro blanco */
                height: 200px; /* Alto del cuadro blanco */
                background-color: #40B5AD; /* Fondo blanco */
                color: #fff; /* Texto transparente */
                text-align: center; /* Alineación del texto en el centro */
                line-height: 200px; /* Alineación vertical del texto */
                font-size: 100px; /* Tamaño de la letra en píxeles (ajusta el valor según tus necesidades) */
                font-family: 'Woodland', sans-serif; /* Utiliza la fuente Woodland */

            }


            /* Estilo para la navegación */
            nav ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                display: flex;
                justify-content: space-around;
            }

            nav a {
                text-decoration: none;
                color: #fff;
                position: relative;
                padding-bottom: 5px;
                transition: border-bottom 0.3s ease; /* Transición para la línea amarilla */
            }

            /* Agrega la línea amarilla debajo de los enlaces cuando el cursor pasa sobre ellos */
            nav a:hover {
                border-bottom: 2px solid #FFD700; /* Color amarillo para la línea */
            }
            /* Estilo para el menú de navegación */

            header {
                background-color: #333;
                padding: 20px 0;
                box-shadow: 0 7px 10px -5px #777;
                position: fixed;
                width: 100%;
                z-index: 99;
                color: #fff;
                margin: 0; /* Elimina el margen superior */
                top: 0; /* Fija el encabezado en la parte superior */

            }
            .container{
                max-width: 90%;
                text-align: center;
                margin: auto;
            }
            .header-section{
                display: flex;
                justify-content: space-between;
                margin: auto;
                align-items: center;
                position: relative;
            }
            .header-section div{
                position: relative;
            }
            .header div p{
                position: absolute;
                top: -24px;
                right: 0px;
                background-color: #fff;
                padding: 1px 6px;
                border-radius: 50%;
                color: red;
                font-weight: 700;
                line-height: 18px;
                border: 1px solid #f00;
            }


            .cart{
                width: 39px;
                height: 38px;
            }
            .cart-products{
                position: absolute!important;
                top: 82px;
                right: -18px;
                background-color: #ccc;
                padding: 0 18px;
                box-shadow: 0px 0px 10px #333;
                display: none;
                min-width: 300px;
            }

            .cart:hover{
                margin-bottom: -10px;
                transition-duration: .5s;
            }
            /*end header*/
            .products div{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                display: flex;
                flex-wrap: wrap;

            }

            /*float cart*/
            .cart-products {
                position: absolute!important;
                top: 82px;
                right: -18px;
                background-color: #ccc;
                padding: 0 18px;
                box-shadow: 0px 0px 10px #333;
                display: none;
                min-width: 300px;
                color: #000; /* Establece el color del texto en negro */
            }

            .cart-products h3 {
                margin-bottom: 0;
            }

            .cart-products .item img {
                width: 115px;
            }

            .cart-products .item {
                display: flex;
                align-items: center;
                border-bottom: solid 2px red;
            }

            .cart-products .item .item-content {
                margin: 0 19px;
                width: 201px;
            }

            .cart-products .item .item-content h5 {
                margin: 0;
                font-size: 15px;
                font-weight: 400;
                font-family: system-ui;
            }

            .cart-products .item .item-content h6 {
                margin: 0;
                font-size: 13px;
                font-weight: 400;
                font-family: system-ui;
            }

            .cart-products .item span {
                background-color: #000;
                padding: 0px 5px;
                border-radius: 50%;
                color: #fff;
                font-family: system-ui;
                cursor: pointer;
            }

            .cart-products .item img{
                width: 115px;
            }

            .cart-products .item{
                display: flex;
                align-items: center;
                border-bottom: solid 2px red;
            }
            .cart-products .item .item-content{
                margin: 0 19px;
                width: 201px;
            }
            .cart-products .item .item-content h5{
                margin: 0;
                font-size: 15px;
                font-weight: 400;
                font-family: system-ui;
            }

            .cart-products .item .item-content h6 {
                margin: 0;
                font-size: 13px;
                font-weight: 400;
                font-family: system-ui;
                color: #000; /* Establece el color del texto en negro */
            }

            .cart-products .item span{
                background-color: #000;
                padding: 0px 5px;
                border-radius: 50%;
                color: #fff;
                font-family: system-ui;
                cursor: pointer;
            }
            .cart-products h3{
                margin-bottom: 0;
            }
            .cart-products .item .item-content h5.cart-price{
                font-weight: 700;
            }

            /*stye to btn close*/
            p.close-btn{
                top: -4px;
                right: 6px;
                cursor: pointer;
                color: #000;
            }

            h6{
                color: #ccc;
            }

            .logo{
                width: 100px;
                height: 50px;
            }

            .btn-add-cart {
                margin-top: -10px; /* Mueve el botón hacia arriba 10px */
            }


            .barra ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                display: flex;
                justify-content: space-around;
            }

            .barra li {
                text-align: center;
            }

            .barra a {
                text-decoration: none;
                color: #fff;
                display: block;
                padding: 10px;
                position: relative;
                transition: border-bottom 0.3s ease; /* Transición para la línea amarilla */
            }

            /* Agrega la línea amarilla debajo de los enlaces cuando el cursor pasa sobre ellos */
            .barra a:hover {
                border-bottom: 2px solid #FFD700; /* Color amarillo para la línea */
            }
            .title {
                text-overflow: ellipsis;
                font-size: 18px;
                line-height: 40px; /* Ajusta el valor según tus necesidades */
                overflow: hidden;
            }

            /* Agrega este estilo para crear una cuadrícula de 3 columnas en tu archivo CSS */
            .products-container {
                display: grid;
                grid-template-columns: repeat(4, 1fr); /* 4 columnas con igual ancho */
                gap: 20px; /* Espacio entre las casillas */
                justify-content: center; /* Centra el contenido horizontalmente */
            }




            .product-image {
                position: relative;
            }

            .product-image img {
                max-width: 100%;
                display: block; /* Ensure the image takes the entire space within its container */
            }

            .discount-label {
                position: absolute;
                top: 0;
                right: 0;
                background-color: #f00;
                color: #fff;
                padding: 2px 4px;
                font-size: 80%;
                border-radius: 5px;
            }


            /* Estilo para la casilla de producto */
            .carts {
                max-width: 25vw; /* Ancho máximo para cada casilla */
                box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
                padding-bottom: 30px;
                margin-bottom: 40px;
                display: flex;
                flex-direction: column; /* Cambia la dirección del contenido a columna */
                align-items: center; /* Alinea el contenido al centro verticalmente */
            }

            .carts img{
                width: 400px;
                max-width: 25vw; /* Set the maximum width of the image to 100% */
                height: auto;
            }

            .carts p{
                flex-wrap: wrap;
                margin-right: 10px;
                margin-left: 10px;
                text-align: center; /* Alinea el texto al centro horizontalmente */
                font-size: 18px; /* Ajusta el tamaño de fuente según tus necesidades */
            }

            .carts > div {
                flex: 1;
            }

            .carts div p{
                position: absolute;
                top: 0;
                right: 0px;
                background-color: #007bff;
                color: #fff;
                padding: 2px 7px 4px 21px;
                clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);
            }
            .carts div{
                position: relative;
            }
            .carts a{
                font-family: system-ui;
                text-decoration: none;
                background: #007bff;
                padding: 9px 100px;
                color: #fff;
                font-size: 17px;
                text-transform: uppercase;
                font-weight: 700;
            }

            .carts a:hover{
                background: #fff;
                color: #007bff;
                border: solid 2px #007bff;
                transition-duration: .3s;
            }
            /* Establece una cuadrícula de 4 columnas */
            .products {
                display: grid;
                grid-template-columns: repeat(3, 1fr); /* 4 columnas con igual ancho */
                gap: 20px; /* Espacio entre las casillas */
                margin-top: 110px;
            }
            .products-container {
                display: grid;
                grid-template-columns: repeat(4, 1fr); /* 4 columnas con igual ancho */
                gap: 20px; /* Espacio entre las casillas */
                justify-content: center; /* Centra el contenido horizontalmente */
            }





            /* Estilo para el contador en el círculo azul */
            .cart-counter {
                position: absolute;
                top: -12px; /* Ajusta la posición vertical según sea necesario */
                right: -12px; /* Ajusta la posición horizontal según sea necesario */
                background-color: #007bff;
                border-radius: 50%;
                width: 24px;
                height: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
                right: 50px;
            }

            /* Estilo para el contador dentro del círculo (letras blancas) */
            .count-product {
                color: #fff; /* Color de letras blanco */
                margin: 0; /* Elimina el margen interior */
            }

        </style>
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
            <div style="position: relative;">
                <!-- Contador en un círculo azul con letras blancas -->
                <div class="cart-counter">
                    <p class="count-product">0</p>
                </div>
                <!-- Imagen del carrito -->
                <img style="margin-right: 55px;" onclick="mostrarCarrito()" class="cart" src="images/icone-de-panier-noir.png" alt="">
            </div>
            <div class="cart-products" id="products-id">
                <p class="close-btn" onclick="cerrarCarrito()">X</p>
                <h3>Mi carrito</h3>
                <div class="card-items">
                </div>
                <h2>Total: S/ <strong class="price-total">0</strong></h2>
            </div>

        </header>
        <section class="container">
            <div class="products">
            </div>
        </section>


        <script>
            // Función para cargar productos desde la base de datos
            function loadProducts() {
                fetch('get_productsNike.php')  // Ruta al archivo PHP que obtiene los productos
                        .then(response => response.json())
                        .then(data => {
                            const container = document.querySelector('.products');
                            data.forEach(product => {
                                const productHTML = `
        <div class="carts">
            <div>
                <img src="${product.imagen}" alt="${product.nombre}">
                <p>-20%</p>
            </div>
            <p class="title">${product.nombre}</p>
            <p class="price">Precio: S/<span>${product.precio}</span></p>
            <a href="" data-id="${product.id}" class="btn-add-cart">Agregar al Carrito</a>
        </div>
    `;
                                container.innerHTML += productHTML;
                            });

                        })
                        .catch(error => {
                            console.error('Error al cargar productos:', error);
                        });
            }

            loadProducts(); // Llama a la función para cargar los productos al cargar la página

        </script>
        <script>
            // Variables
            let allContainerCart = document.querySelector('.products');
            let containerBuyCart = document.querySelector('.card-items');
            let priceTotal = document.querySelector('.price-total');
            let amountProduct = document.querySelector('.count-product');
            let buyThings = [];
            let totalCard = 0;
            let countProduct = 0;

    // Función para cargar los eventos
            function loadEventListeners() {
                allContainerCart.addEventListener('click', addProduct);
                containerBuyCart.addEventListener('click', deleteProduct);
            }

            loadEventListeners();

    // Función para agregar un producto al carrito
            function addProduct(e) {
                e.preventDefault();
                if (e.target.classList.contains('btn-add-cart')) {
                    const selectProduct = e.target.parentElement;
                    readTheContent(selectProduct);
                }
            }

    // Función para eliminar un producto del carrito
            function deleteProduct(e) {
                if (e.target.classList.contains('delete-product')) {
                    const deleteId = e.target.getAttribute('data-id');
                    buyThings = buyThings.filter(product => product.id !== deleteId);
                    countProduct--;

                    if (buyThings.length === 0) {
                        totalCard = 0; // Establece el total en 0 si no hay productos en el carrito
                    } else {
                        // Recalcula el total solo si quedan productos en el carrito
                        totalCard = 0;
                        buyThings.forEach(product => {
                            const priceReduce = parseFloat(product.price) * parseFloat(product.amount);
                            totalCard += priceReduce;
                        });
                        totalCard = totalCard.toFixed(2);
                    }

                    // Actualiza la numeración del carrito y el total en el carrito
                    amountProduct.innerHTML = countProduct;
                    priceTotal.innerHTML = totalCard;

                    loadHtml();

                    // Si no quedan productos en el carrito, oculta el carrito
                    if (buyThings.length === 0) {
                        cerrarCarrito();
                    }
                }
            }






    // Función para leer el contenido de un producto y agregarlo al carrito
            function readTheContent(product) {
                const priceElement = product.querySelector('.price span');
                const priceText = priceElement.textContent.trim();
                const infoProduct = {
                    image: product.querySelector('div img').src,
                    title: product.querySelector('.title').textContent,
                    price: priceText,
                    id: product.querySelector('a').getAttribute('data-id'),
                    amount: 1
                }

                totalCard = parseFloat(totalCard) + parseFloat(infoProduct.price);
                totalCard = totalCard.toFixed(2);
                const exist = buyThings.some(product => product.id === infoProduct.id);
                if (exist) {
                    const pro = buyThings.map(product => {
                        if (product.id === infoProduct.id) {
                            product.amount++;
                            return product;
                        } else {
                            return product;
                        }
                    });
                    buyThings = [...pro];
                } else {
                    buyThings = [...buyThings, infoProduct];
                    countProduct++;
                }
                loadHtml();
            }

    // Función para cargar el contenido del carrito
            function loadHtml() {
                clearHtml();
                buyThings.forEach(product => {
                    const {image, title, price, amount, id} = product;
                    const row = document.createElement('div');
                    row.classList.add('item');
                    row.innerHTML = `
            <img src="${image}" alt="">
            <div class="item-content">
                <h5>${title}</h5>
                <h5 class="cart-price">${price}</h5>
                <h6>Cantidad: ${amount}</h6>
            </div>
            <span class="delete-product" data-id="${id}">X</span>
        `;

                    containerBuyCart.appendChild(row);

                    priceTotal.innerHTML = totalCard;

                    amountProduct.innerHTML = countProduct;
                });
            }

    // Función para limpiar el contenido del carrito
            function clearHtml() {
                containerBuyCart.innerHTML = '';
            }

    // Función para mostrar el carrito
            function mostrarCarrito() {
                document.getElementById("products-id").style.display = "block";
            }

    // Función para cerrar el carrito
            function cerrarCarrito() {
                document.getElementById("products-id").style.display = "none";
            }

    // Función para mostrar los elementos del carrito
            function showCartItems() {
                const productsContainer = document.getElementById("products-id");
                productsContainer.innerHTML = '';

                buyThings.forEach(product => {
                    const {image, title, price, amount} = product;
                    const row = document.createElement('div');
                    row.classList.add('item-popup');
                    row.innerHTML = `
            <img src="${image}" alt="">
            <div class="item-content">
                <h5>${title}</h5>
                <h5 class="cart-price">${price}</h5>
                <h6>Cantidad: ${amount}</h6>
            </div>
            <span class="delete-product" data-id="${product.id}">X</span>
        `;

                    productsContainer.appendChild(row);
                });

                productsContainer.style.display = "block";
            }

        </script>
    </body>
</html>