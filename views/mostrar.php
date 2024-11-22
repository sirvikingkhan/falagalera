<!DOCTYPE html>
<html>
<head>
    <title>Actividades Registradas</title>
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
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .ver-mas-btn {
            background-color: #f4d742; /* Color de fondo amarillo */
            color: black;
            width: 100%;
            padding: 10px 0;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .ver-mas-btn:hover {
            background-color: #f6e52c; /* Color amarillo más claro al pasar el cursor */
        }
        .hidden {
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-btn {
            background-color: #ff6347;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #cc4b37;
        }
        @media screen and (max-width: 767px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            tr {
                margin-bottom: 10px;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 10px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            td {
                border: none;
                border-bottom: 1px solid #ddd;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
            td:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Actividades Registradas</h2>
        <!-- Botón "Ver Más" -->
        <button class="ver-mas-btn" onclick="toggleActividades()">Ver Más</button>
        <!-- Contenido oculto de la tabla -->
        <table class="hidden" id="tablaActividades">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Finalización</th>
                    <th>Actividad</th>
                    <th>Lugar</th>
                    <th>Responsable</th>
                    <th>Participantes</th>
                    <th>Recursos Necesarios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexión a la base de datos
                $conexion = new mysqli("localhost", "root", "", "quritaky");
                // Verificar conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Consulta SQL para obtener las actividades registradas
                $sql = "SELECT * FROM actividades";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar cada actividad en una fila de la tabla
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td data-label='Fecha'>" . $row["fecha"] . "</td>";
                        echo "<td data-label='Hora de Inicio'>" . $row["hora_inicio"] . "</td>";
                        echo "<td data-label='Hora de Finalización'>" . $row["hora_fin"] . "</td>";
                        echo "<td data-label='Actividad'>" . $row["actividad"] . "</td>";
                        echo "<td data-label='Lugar'>" . $row["lugar"] . "</td>";
                        echo "<td data-label='Responsable'>" . $row["responsable"] . "</td>";
                        echo "<td data-label='Participantes'>" . $row["participantes"] . "</td>";
                        echo "<td data-label='Recursos Necesarios'>" . $row["recursos"] . "</td>";
                        echo "<td data-label='Acciones'><button class='delete-btn' onclick='eliminarActividad(" . $row['id'] . ")'>Eliminar</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No se encontraron actividades.</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function toggleActividades() {
            var tablaActividades = document.getElementById("tablaActividades");
            tablaActividades.classList.toggle("hidden");
        }

        function eliminarActividad(idActividad) {
            if (confirm("¿Estás seguro de que deseas eliminar esta actividad?")) {
                // Crear una solicitud AJAX para eliminar la actividad
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "eliminar_actividad.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert("Actividad eliminada con éxito");
                        window.location.reload(); // Recargar la página para reflejar los cambios
                    } else {
                        alert("Error al eliminar la actividad");
                    }
                };
                xhr.send("id=" + idActividad);
            }
        }
    </script>
</body>
</html>
