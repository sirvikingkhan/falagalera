<?php
include("database.php");

if (isset($_POST['update_class'])) {
    // Validar que se hayan proporcionado todos los campos necesarios
    if (isset($_POST['id'], $_POST['dateBegin'], $_POST['dateEnd'], $_POST['paquete'], $_POST['observaciones']) &&
        strlen($_POST['id']) >= 1 && strlen($_POST['dateBegin']) >= 1 && strlen($_POST['dateEnd']) >= 1
    ) {
        // Sanitizar las entradas
        $id = $_POST['id'];
        $dateBegin = $_POST['dateBegin'];
        $dateEnd = $_POST['dateEnd'];
        $package = $_POST['paquete'];
        $observaciones = $_POST['observaciones'];

        // Verificar si la fecha de finalización es mayor o igual a la de comienzo
        if ($dateEnd < $dateBegin) {
            echo '<script language="javascript">alert("La fecha de finalización no puede ser menor a la de comienzo, el estudiante no se registró");</script>';
        } else {
            // Preparar y ejecutar la consulta SQL usando consultas preparadas para evitar inyección SQL
            $consulta = "UPDATE students SET fecha_inicio=?, fecha_fin=?, paquete=?, observaciones=? WHERE Id=?";
            $records = $conn->prepare($consulta);
            $records->execute([$dateBegin, $dateEnd, $package, $observaciones, $id]);

            // Verificar si la actualización fue exitosa
            if ($records->rowCount() > 0) {
                echo '<script language="javascript">alert("Se ha actualizado el paquete de clases");</script>';
            } else {
                echo '<script language="javascript">alert("No se ha actualizado el paquete de clases");</script>';
            }
        }
    } else {
        // Mostrar un mensaje de error si no se proporcionaron todos los campos
        echo '<h3 class="bad">Por favor complete todos los campos</h3>';
    }
}

// Redirigir a la página index.php después de completar el proceso
echo '<script>window.location.replace("index.php");</script>';
?>
