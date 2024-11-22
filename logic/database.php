<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'falagalera';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Conexión exitosa, no se imprime nada
} catch (PDOException $e) {
    die('Conexión Fallida: ' . $e->getMessage());
}
?>
