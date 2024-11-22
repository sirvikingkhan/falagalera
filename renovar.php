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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Lógica para renovar el registro del estudiante
    // Aquí podrías actualizar una fecha de renovación en la base de datos, por ejemplo
    $query = "UPDATE students SET fecha_renovacion = NOW() WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Renovación exitosa.";
    } else {
        echo "Error al renovar el registro.";
    }
}
?>
