<?php
require 'logic/database.php';
session_start();

if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE id = :id ');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de estudiantes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
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
            <th>Fecha de inicio</th>
            <th>Fecha de fin</th>
        </tr>
        <?php foreach ($resultados as $fila): ?>
        <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['Apellidos']; ?></td>
            <td><?php echo $fila['categoria']; ?></td>
            <td><?php echo $fila['fecha_inicio']; ?></td>
            <td><?php echo $fila['fecha_fin']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
