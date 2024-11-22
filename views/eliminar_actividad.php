<?php
// Verificar si se recibió un ID de actividad válido
if (isset($_POST['id_actividad'])) {
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "quritaky");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Sanitizar y obtener el ID de la actividad a eliminar
    $id_actividad = $conexion->real_escape_string($_POST['id_actividad']);

    // Consulta SQL para eliminar la actividad
    $sql = "DELETE FROM actividades WHERE id = $id_actividad";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        // La actividad se eliminó correctamente
        echo "Actividad eliminada exitosamente";
    } else {
        // Error al eliminar la actividad
        echo "Error al eliminar la actividad: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // No se recibió un ID de actividad válido
    echo "ID de actividad no proporcionado";
}
?>
