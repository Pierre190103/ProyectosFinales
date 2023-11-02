<?php
// Datos de conexión a la base de datos (ajusta estos valores)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_html";

// Conectar a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombres_apellidos = $_POST['nombres_apellidos'];
$correo = $_POST['correo'];
$doc_identidad = $_POST['doc_identidad'];
$nro_documento = $_POST['nro_documento'];
$telefono = $_POST['telefono'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$producto_servicio = $_POST['producto_servicio'];
$nro_pedido = $_POST['nro_pedido'];

$monto = $_POST['monto'];
$descripcion = $_POST['descripcion'];
$tipo_reclamo = $_POST['tipo_reclamo'];
$descripcion_reclamo = $_POST['descripcion_reclamo'];
$pedido_consumidor = $_POST['pedido_consumidor'];
$foto = $_FILES['foto'];

// Crear la consulta SQL
$sql = "INSERT INTO reclamos (nombres_apellidos, correo, doc_identidad, nro_documento, telefono, departamento, provincia, ciudad, direccion, producto_servicio, nro_pedido, monto, descripcion, tipo_reclamo, descripcion_reclamo, pedido_consumidor, foto) VALUES ('".$nombres_apellidos."', '$correo', '$doc_identidad', '$nro_documento', '$telefono', '$departamento', '$provincia', '$ciudad', '$direccion', '$producto_servicio', '$nro_pedido', '$monto', '$descripcion', '$tipo_reclamo', '$descripcion_reclamo', '$pedido_consumidor', '".$foto["name"]."')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Reclamación enviada con éxito";
    echo '<script type="text/javascript">
           window.location = "LibroReclamaciones.php";
          </script>';
} else {
    echo "Error al enviar la reclamación: " . $conexion->error;
}


// Cerrar la conexión a la base de datos
$conexion->close();
?>