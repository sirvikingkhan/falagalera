



<!DOCTYPE html>
<html>
<head>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los datos del formulario
        $fecha = $_POST["fecha"];
        $hora_inicio = $_POST["hora_inicio"];
        $hora_fin = $_POST["hora_fin"];
        $actividad = $_POST["actividad"];
        $lugar = $_POST["lugar"];
        $responsable = $_POST["responsable"];
        $participantes = $_POST["participantes"];
        $recursos = $_POST["recursos"];

        // Preparar la consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO actividades (fecha, hora_inicio, hora_fin, actividad, lugar, responsable, participantes, recursos) 
                VALUES ('$fecha', '$hora_inicio', '$hora_fin', '$actividad', '$lugar', '$responsable', '$participantes', '$recursos')";

        // Ejecutar la consulta SQL
        if ($conexion->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar los datos: " . $conexion->error;
        }
    }
?>

    <title>Agenda de Actividades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #333;
        }
        input[type="text"]::placeholder,
        input[type="date"]::placeholder,
        input[type="time"]::placeholder {
            color: #999; /* Color del placeholder */
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        /* Estilos adicionales para el botón de "Seleccionar Fecha" */
        .date-picker {
            position: relative;
        }
        .date-picker input[type="date"] {
            cursor: pointer;
        }
        .date-picker .calendar {
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            z-index: 1000;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }
        .date-picker .calendar.active {
            display: block;
        }
        /* Estilos para el calendario */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
    
</head>

<body>
    
    <div class="container">
        <h2>Agenda de Actividades</h2>
        <form id="activityForm" action="" method="post" onsubmit="saveToDatabase(event)">
            <label for="fecha">Fecha:</label>
            <div class="date-picker">
                <input type="date" id="fecha" name="fecha" placeholder="Seleccionar Fecha">
                <div class="calendar">
                    <!-- El calendario se insertará aquí mediante JavaScript -->
                </div>
            </div>
            <label for="hora_inicio">Hora de Inicio:</label>
            <input type="time" id="hora_inicio" name="hora_inicio" required>
            <label for="hora_fin">Hora de Finalización:</label>
            <input type="time" id="hora_fin" name="hora_fin" required>
            <label for="actividad">Actividad:</label>
            <input type="text" id="actividad" name="actividad" required>
            <label for="lugar">Lugar:</label>
            <input type="text" id="lugar" name="lugar" required>
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" required>
            <label for="participantes">Participantes:</label>
            <input type="text" id="participantes" name="participantes" required>
            <label for="recursos">Recursos necesarios:</label>
            <input type="text" id="recursos" name="recursos" required>
            <input type="submit" value="Guardar">
        </form>
    </div>
    <script>
        // Función para guardar en la base de datos (simulada)
        function saveToDatabase(event) {
            // Evitar el envío predeterminado del formulario
            event.preventDefault();

            // Obtener los datos del formulario
            const fecha = document.getElementById("fecha").value;
            const horaInicio = document.getElementById("hora_inicio").value;
            const horaFin = document.getElementById("hora_fin").value;
            const actividad = document.getElementById("actividad").value;
            const lugar = document.getElementById("lugar").value;
            const responsable = document.getElementById("responsable").value;
            const participantes = document.getElementById("participantes").value;
            const recursos = document.getElementById("recursos").value;

            // Aquí deberías enviar los datos a tu servidor para guardarlos en la base de datos
            // Por ahora, solo mostramos los datos en la consola
            console.log("Fecha:", fecha);
            console.log("Hora de Inicio:", horaInicio);
            console.log("Hora de Finalización:", horaFin);
            console.log("Actividad:", actividad);
            console.log("Lugar:", lugar);
            console.log("Responsable:", responsable);
            console.log("Participantes:", participantes);
            console.log("Recursos necesarios:", recursos);

            // Recargar la página después de enviar el formulario (simulado)
            // window.location.reload();
        }

        // Función para construir el calendario
        function buildCalendar(year, month) {
            // Aquí se coloca el código para construir el calendario, similar a la función proporcionada anteriormente
            // Pero ten en cuenta que necesitarás modificar esta función para que se ajuste a tus necesidades específicas
        }
    </script>
</body>
</html>