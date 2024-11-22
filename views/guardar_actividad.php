<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quritaky";

// Obtener datos del formulario
$fecha = $_POST['fecha'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];
$actividad = $_POST['actividad'];
$lugar = $_POST['lugar'];
$responsable = $_POST['responsable'];
$participantes = $_POST['participantes'];
$recursos = $_POST['recursos'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar datos en la tabla
$sql = "INSERT INTO actividades (fecha, hora_inicio, hora_fin, actividad, lugar, responsable, participantes, recursos)
        VALUES ('$fecha', '$hora_inicio', '$hora_fin', '$actividad', '$lugar', '$responsable', '$participantes', '$recursos')";

if ($conn->query($sql) === TRUE) {
    echo "Actividad registrada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
