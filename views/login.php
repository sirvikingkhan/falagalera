<?php

require '../logic/database.php';
session_start(); 
if (isset($_SESSION['user_id'])) {
    header('Location: /falagalera/');
}

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (is_array($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /falagalera");
    } else {
        $message = '<script> alert("Lo siento, no se encontraron coincidencias!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/img/quritaky.ico" rel="icon">
    <style>
   body {
    background: url('../assets/img/Fondologin.jpg') no-repeat center center fixed;
    background-size: cover;
}
.login-box {
    width: 300px;
    margin: 80px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    background-color: rgba(0, 51, 160, 0.8); /* Fondo semitransparente con color azul de la bandera de Brasil */
}
.login-box h1 {
    margin-bottom: 20px;
    color: #FFDF00; /* Amarillo de la bandera de Brasil */
}
.form-label {
    margin-top: 10px;
    color: white;
}
.form-control {
    margin-bottom: 10px;
}
.login-box button {
    margin-top: 10px;
    width: 100%;
    background-color: #009135; /* Verde de la bandera de Brasil */
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}
.login-box button:hover {
    background-color: #006622; /* Verde más oscuro para el hover */
}


    </style>
</head>
<body>

<?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
<?php endif; ?>

<div class="login-box">
    <a href="login.php" class="mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
    <h1>Iniciar Sesion</h1>

    <form action="login.php" method="POST">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Ingrese Contraseña" required>
        <center>
            <button type="submit" class="btn btn-success">Ingresar</button>
        </center>
    </form> 
   
</div>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
