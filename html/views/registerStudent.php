<?php
include ("../logic/database.php");
$imagen='';

if(isset($_POST['Fin_registro'])){
    if(strlen($_POST['id'])>=1 &&
        strlen($_POST['name'])>=1 &&
        strlen($_POST['apellido'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['direccion'])>=1 &&
        strlen($_POST['dateBirthday'])>=1 &&
        strlen($_POST['dateBegin'])>=1 &&
        strlen($_POST['dateEnd'])>=1){
            $file = $_FILES["porfile"];
            $nombre=$file["name"];
            $tipo = $file["type"];
            $ruta_provisional = $file["tmp_name"];
            $carpeta="fotos/";
            $id = $_POST['id'];
            $name = $_POST['name'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $dateBirthday = $_POST['dateBirthday'];
            $category = $_POST['categoria'];
            $nameParent = $_POST['nameParent'];
            $lastNameParent = $_POST['lastNameParent'];
            $phoneParent = $_POST['phoneParent'];
            $dateBegin = $_POST['dateBegin'];
            $dateEnd = $_POST['dateEnd'];
            $package = $_POST['paquete'];
            $observaciones = $_POST['observaciones'];

            if(strlen($nombre)>0){
                $src = $carpeta.$nombre;
                move_uploaded_file($ruta_provisional, $src);
                $imagen = "fotos/".$nombre;
            
            }else{
                echo '<script language="javascript">alert("No se seleccionó foto o no es válida, el estudiante se registró con una foto por defecto.");</script>';
                $imagen = "fotos/sinfoto.jpeg";
            }

            if($dateEnd<$dateBegin){
                echo '<script language="javascript">alert("La fecha de finalización no puede ser menor a la de comienzo, el estudiante no se registró");</script>';
            }else{
                $existeId = $conn->prepare("SELECT * FROM students WHERE Id=".$id);
                $existeId->execute();
                $result = $existeId->fetchAll(PDO::FETCH_ASSOC);
                if($result){
                    echo '<script language="javascript">alert("El id ya está registrado, no se puede agregar el estudiante con este id");</script>';
                }else{
                    
                    $consulta= "INSERT INTO students(foto, Id, Nombre, Apellidos, email, telefono, direccion, fecha_nac, categoria, nombre_acudiente, ape_acudiente, tel_acudiente, fecha_inicio, fecha_fin, paquete, observaciones) 
                        VALUES ('$imagen','$id','$name','$apellido', '$email','$telefono','$direccion','$dateBirthday', '$category', '$nameParent','$lastNameParent','$phoneParent', '$dateBegin','$dateEnd', '$package', '$observaciones')";
                    $records = $conn->prepare($consulta);
                    $records->execute();
                    $results = $records->fetch(PDO::FETCH_ASSOC);
                
                    if(isset($results)){
                        echo '<script language="javascript">alert("El estudiante se ha registrado con éxito");</script>';
                    }else{
                        echo '<script language="javascript">alert("El estudiante no se ha registrado con éxito");</script>';
                    }
                }
            }
    }else{
        ?>
            <h3 class="bad">Por favor complete todos los campos</h3>
        <?php
    }
}
?>
console.log()
<script> 
window.location.replace('../index.php'); 
</script>