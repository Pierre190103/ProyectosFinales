<?php
// Conexión a la base de datos (asegúrate de configurar los detalles de tu base de datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_html";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesamiento de los datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

// Procesamiento de la imagen
$imagen = $_FILES['imagen']['name'];
$imagen_temp = $_FILES['imagen']['tmp_name'];
$imagen_destino = "Imagenes/" . $imagen; // Asegúrate de crear la carpeta de destino

move_uploaded_file($imagen_temp, $imagen_destino);

// Inserción de datos en la base de datos
$sql = "INSERT INTO productosnike (nombre, precio, imagen) VALUES ('$nombre', $precio, '$imagen_destino')";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado con éxito.";
    echo '<script type="text/javascript">
           window.location = "subirproductos.php";
          </script>';
} else {
    echo "Error al agregar el producto: " . $conn->error;
}

// Cierre de la conexión a la base de datos
$conn->close();
?>
