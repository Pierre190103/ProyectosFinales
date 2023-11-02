<?php
// Conexión a la base de datos (debes configurar tus propios datos de conexión)
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'proyecto_html';

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Consulta SQL para obtener todas las reclamaciones
$query = "SELECT * FROM reclamos";
$resultado = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Reclamaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow-x: auto; /* Agrega una barra de desplazamiento horizontal */
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
            vertical-align: middle;
        }
        th {
            background-color: #333;
            color: #fff;
            text-align: left;
        }
        td {
            text-align: right;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Listado de Reclamaciones</h1>
    <div style="overflow-x: auto;"> <!-- Agrega una barra de desplazamiento horizontal para toda la tabla -->
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres y Apellidos</th>
                <th>Correo</th>
                <th>Documento de Identidad</th>
                <th>Número de Documento</th>
                <th>Teléfono</th>
                <th>Departamento</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Producto/Servicio</th>
                <th>Número de Pedido</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Tipo de Reclamo</th>
                <th>Descripción del Reclamo</th>
                <th>Pedido del Consumidor</th>
                <th>Foto</th>
                <th>Fecha de Reclamo</th>
            </tr>
            <?php
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombres_apellidos'] . "</td>";
                echo "<td>" . $fila['correo'] . "</td>";
                echo "<td>" . $fila['doc_identidad'] . "</td>";
                echo "<td>" . $fila['nro_documento'] . "</td>";
                echo "<td>" . $fila['telefono'] . "</td>";
                echo "<td>" . $fila['departamento'] . "</td>";
                echo "<td>" . $fila['provincia'] . "</td>";
                echo "<td>" . $fila['ciudad'] . "</td>";
                echo "<td>" . $fila['direccion'] . "</td>";
                echo "<td>" . $fila['producto_servicio'] . "</td>";
                echo "<td>" . $fila['nro_pedido'] . "</td>";
                echo "<td>" . $fila['monto'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                echo "<td>" . $fila['tipo_reclamo'] . "</td>";
                echo "<td>" . $fila['descripcion_reclamo'] . "</td>";
                echo "<td>" . $fila['pedido_consumidor'] . "</td>";
                echo "<td>" . $fila['foto'] . "</td>";
                echo "<td>" . $fila['fecha_reclamo'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

