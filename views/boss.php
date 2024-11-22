<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'quritaky';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Conexión Fallida: ' . $e->getMessage());
}

// Realizar consulta a la base de datos
$query = "SELECT id, Nombre, categoria FROM students";
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
    <title>Notificaciones</title>
    <style>
        body {
            background-color: #000; /* Cambiado el color de fondo a negro */
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto; /* Centrado horizontal */
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con transparencia */
            color: white;
        }
        th, td {
            border: 1px solid #ddd; /* Cambiado el color del borde */
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        /* Estilos para filas impares */
        tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 0.1); /* Fondo blanco con transparencia */
        }
        /* Estilos para filas al pasar el ratón */
        tr:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Fondo blanco más oscuro con transparencia */
        }
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header class="d-flex justify-content-center py-3 mb-4 border-bottom">
        <a href="../index.php" class="text-decoration-none">
            <img src="fotos/regresar.png" width="150" alt="Regresar">
        </a>
    </header>

    <h2 style="text-align: center;">Resultados de estudiantes</h2>
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
                <form action="renovar.php" method="POST" style="margin: 0;">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                    <button type="submit" style="background-color: #333; color: white; border: none; padding: 10px;">Renovar</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
