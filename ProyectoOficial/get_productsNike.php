<?php
$RUTA = "localhost";
$USUARIO = "root";
$CLAVE = "";
$DB = "proyecto_html";
$TABLA = "productosnike";

$conn = new mysqli($RUTA, $USUARIO, $CLAVE, $DB);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, precio, imagen FROM $TABLA";
$result = $conn->query($sql);

if ($result === false) {
    die("Error en la consulta SQL: " . $conn->error);
}

$products = array();
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);

$conn->close();
?>
