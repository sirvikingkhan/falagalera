<?php

require 'logic/database.php';

try {
    $usuario = 'admin3'; // Cambia esto por el valor recibido del formulario
    $contraseña = 'contraseña_segura'; // Cambia esto por el valor recibido del formulario

    // Hashear la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':password', $contraseña_hash);
    $stmt->execute();
    echo "Usuario creado con éxito.";
} catch (PDOException $e) {
    // Manejar el error
    if ($e->getCode() == 23000) {
        echo "El usuario ya existe.";
    } else {
        echo "Error: " . $e->getMessage();
    }
}

?>
