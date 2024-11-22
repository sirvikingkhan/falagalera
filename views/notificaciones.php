<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'quritaky';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Conexion Fallida: ' . $e->getMessage());
}

// Realizar consulta a la base de datos
$query = "SELECT Nombre, Apellidos, categoria, fecha_fin FROM students";
$resultado = $conn->query($query);

// Verificar si se encontraron resultados
if (!$resultado) {
    die("Error al ejecutar la consulta");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de estudiantes</title>
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.1); /* Fondo transparente */
            color: white; /* Texto blanco */
            font-family: Arial, sans-serif; /* Fuente del texto */
        }
        table {
            border-collapse: collapse;
            width: 80%; /* Ancho de la tabla */
            margin: 0 auto; /* Centrar la tabla */
            background-color: rgba(0, 0, 0, 0.5); /* Fondo transparente para la tabla */
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: white; /* Texto blanco */
        }
        th {
            background-color: #333; /* Color de fondo para los encabezados de columna */
        }
    </style>
</head>
<body>
    <h2>Resultados de estudiantes</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Categoría</th>
            <th>Fecha de fin</th>
            <th>Días transcurridos</th>
        </tr>
        <?php foreach ($resultado as $fila): ?>
        <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['Apellidos']; ?></td>
            <td><?php echo $fila['categoria']; ?></td>
            <td><?php echo $fila['fecha_fin']; ?></td>
            <td><?php 
                    $fecha_fin = new DateTime($fila['fecha_fin']);
                    $hoy = new DateTime();
                    $diferencia = $hoy->diff($fecha_fin);
                    echo $diferencia->days; // Mostrar los días transcurridos
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
