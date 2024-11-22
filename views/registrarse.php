<?php
    require '../logic/database.php';

    $message='';

    if (!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['confirmar_password'])) {
        if($_POST['password'] == $_POST['confirmar_password']){
            $sql = "INSERT INTO users (usuario, password) VALUES (:usuario, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':usuario', $_POST['usuario']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password);
            if ($stmt->execute()) {
                $message = '<script> alert("Usuario Creado Satisfactoriamente!")</script>';
            } else {
                $message = '<script> alert("Lamentablemente no se pudeo crear el Usuario! \nRevise que no este registrado ese nombre de usuario con anterioridad!")</script>';
            }
        }else{
            $message = '<script> alert("Las Contraseñas no coinciden!")</script>';
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estiloLogin.css">
</head>
<body>

    <?php
        if(!empty($message)):
    ?>
    <p>
        <?= $message
        ?>
    </p>
    <?php endif; ?>

    <div class="login-box">
      <img src="../assets/img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Registrarse</h1> 
      <form action="registrarse.php" method="POST">
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese su usuario" required>
          <input type="password" class="form-control" autocomplete="off" id="password" name="password" placeholder="Ingresa la contraseña" required>
          <input type="password" class="form-control" autocomplete="off" id="confirmar_password" name="confirmar_password" placeholder="Confirme la contraseña" required style="background-color: #0000; border: 1px solid white;">
                    
          <center>
          <button type="submit" style="background-color: yellow; color: black; padding: 10px 20px; border: 2px solid darkorange; border-radius: 5px; cursor: pointer;">Registrar</button>

          </center>
          <BR>
      </form>
            <center>
      <button type="submit" onclick="location.href='login.php'" style="background-color: green; color: white; padding: 10px 20px; border: 2px solid darkgreen; border-radius: 5px; cursor: pointer;">Ingresar</button>

      </center>
    </div>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>