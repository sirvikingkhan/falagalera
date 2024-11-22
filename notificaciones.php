<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'quritaky';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Conexion Fallida: ' . $e->getMessage());
}

// Realizar consulta a la base de datos
$query = "SELECT Nombre, categoria FROM students";
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
            background-color: rgba(255, 255, 0, 0.1); /* Conservar el color de fondo amarillo */
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #333;
            color: white;
        }
        /* Media query para pantallas pequeñas */
        @media screen and (max-width: 600px) {
            th, td {
                padding: 6px; /* Reducción del espacio entre celdas */
            }
        }
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="fotos/regresar.png" width="150">
        </a>
    </header>

    <h2>Resultados de estudiantes</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Renovar</th>
        </tr>
        <?php while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['categoria']; ?></td>
            <td>
                <?php 
                    // Puedes mantener la lógica de renovación aquí si lo deseas
                    echo "Renovar";
                ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
