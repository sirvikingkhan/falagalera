<?php

require 'logic/database.php';
    session_start();

    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE id = :id ');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Escuela Quritaky</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="assets/js/showForm.js"></script>
  <script type="text/javascript" src="assets/js/permiso_camara.js"></script>
  <script type="text/javascript" src="assets/js/listarEstudiantes.js"></script>
  <script type="text/javascript" src="assets/js/webcam.min.js"></script>

  <!-- Calendar Stuff -->

  <!-- Favicons -->
  <link href="assets/img/Suadance sin fondo negro.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Alternate CSS Files -->
  <link href="assets/css/calendar.css" rel="stylesheet">
  <link href="assets/css/overlay.css" rel="stylesheet">


</head>

<body>
  <!-- si esta registrado el usuario, muestra esto -->
  <?php if(!empty($user)):?>
  <!-- ======= Header ======= -->

  <header id="header">
    <div class="container">
      <br> <br>

    <h1><a href="index.php"><img src="assets/img/Logo quritaky.png" width="150" height="100"></a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><span>Configuración</span>
      <div class="navfirst"><label class="welcome">Bienvenido <?= $user['usuario'] ?></label></div></h2>

      <nav id="navbar" class="navbar">
    <ul>
    <li>
    <a class="nav-link" href="#add" onclick="loadHomeSection()">
        <img src="assets/img/registrar.png" alt="Registrar estudiante" style="width:50px;height:50px;">
    </a>
</li>

        <li>
            <a class="nav-link" href="#category">
                <img src="assets/img/lista_estudiantes.png" alt="Lista de Estudiantes" style="width:50px;height:50px;">
            </a>
        </li>


            <li>
            <a class="nav-link" href="#audio">
                <img src="assets/img/audio.png" alt="audio" style="width:50px;height:50px;">
            </a>
        </li>
        <li>
            <a class="nav-link" href="#game">
                <img src="assets/img/game.png" alt="game" style="width:50px;height:50px;">
            </a>
        </li>
        <li>
            <a class="nav-link" href="#clases">
                <img src="assets/img/mes.png" alt="Horarios y Clases" style="width:50px;height:50px;">
            </a>
            </li>
        <li>
            <a href="logic/logout.php">
                <img src="assets/img/salir.png" alt="Cerrar Sesión" width="50" height="50">
            </a>
        </li>
    </ul>
</nav>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="social-links">
        
       
      </div>

    </div>
  </header><!-- End Header -->

<!-- AUDIO seccion -->


  <!-- ======= Sección de Bienvenida a Fala Galera ======= -->
<section id="add" class="add" style="font-family: Arial, sans-serif; padding: 20px; background-color: #f2f2f2;">
    <div class="header" style="text-align: center; padding: 20px; background-color: #009B3A; color: #FFFFFF; border-radius: 8px; margin-bottom: 20px;">
        <h1 style="font-size: 2.5em; margin: 0;">Bem-vindo ao Fala Galera!</h1>
        <p style="font-size: 1.2em; margin: 10px 0;">Tu puerta al mundo del portugués y la cultura brasileña</p>
    </div>
    
    <div class="container" style="display: flex; flex-direction: column; gap: 20px;">
        <!-- Sobre Fala Galera -->
        <div class="card introduction" style="background-color: #FFD700; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <h3 style="margin-top: 0; color: #333;">Sobre Fala Galera</h3>
            <p>Fala Galera es tu nueva aplicación de aprendizaje de portugués, diseñada para sumergirte en la cultura brasileña a través de lecciones interactivas, frases comunes y una comunidad vibrante.</p>
        </div>
        
        <!-- Características Destacadas -->
        <div class="features" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div class="feature-card" style="flex: 1; min-width: 280px; background-color: #87CEEB; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.2s;">
                <h3 style="margin-top: 0; color: #333;">Lecciones Diarias</h3>
                <p>Accede a lecciones interactivas y aprende frases esenciales como “Fala galera” y muchas más, ¡con temas brasileños en cada sesión!</p>
            </div>
            <div class="feature-card" style="flex: 1; min-width: 280px; background-color: #FF4500; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.2s;">
                <h3 style="margin-top: 0; color: #FFFFFF;">Descubre la Cultura</h3>
                <p>Explora la música, gastronomía y costumbres brasileñas mientras aprendes portugués. Una experiencia inmersiva para que vivas el idioma.</p>
            </div>
            <div class="feature-card" style="flex: 1; min-width: 280px; background-color: #32CD32; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.2s;">
                <h3 style="margin-top: 0; color: #FFFFFF;">Comunidad Activa</h3>
                <p>Únete a una comunidad de estudiantes y nativos que comparten el amor por el portugués. Participa en foros y sesiones de práctica.</p>
            </div>
        </div>
        
        <!-- Progreso del Estudiante -->
        <div class="card progress" style="background-color: #FFFACD; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <h3 style="margin-top: 0; color: #333;">Tu Progreso</h3>
            <p>Visualiza tu avance en las lecciones y desafíos. Gana medallas y desbloquea logros a medida que progresas en tu aprendizaje.</p>
        </div>
        
        <!-- Logros y Certificados -->
        <div class="card achievements" style="background-color: #DDA0DD; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <h3 style="margin-top: 0; color: #333;">Logros y Certificados</h3>
            <p>Obtén certificados al completar niveles y celebra tus logros. ¡Comparte tus éxitos con amigos y familiares!</p>
        </div>
    </div>

    <!-- Animaciones con CSS -->
    <style>
        /* Efecto de hover para agrandar las tarjetas */
        .feature-card:hover {
            transform: scale(1.05);
        }

        /* Ajuste de diseño responsivo */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            .features {
                flex-direction: column;
            }
            .feature-card {
                width: 100%;
            }
        }
    </style>
</section>



<!-- open game -->

<section id="game" class="game">


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos de Completar Palabras</title>
</head>
<body>
    <h1>Selecciona un Juego</h1>
    <ul>
        <li><a href="games/game1.html" target="game_frame">Juego 1 - Verbos</a></li>
        <li><a href="games/game2.html" target="game_frame">Juego 2 - Nombres y Objetos</a></li>
        <li><a href="games/game3.html" target="game_frame">Juego 3 - Original</a></li>
    </ul>

    <iframe src="games/game1.html" name="game_frame" width="100%" height="600px" frameborder="0"></iframe>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <script src="assets/scripts/game1.js"></script>
</body>

</html>










    </section>

<!-- Categories Section -->

<section id="category" class="category">
<!DOCTYPE html>

  <div class="container">

    <div class="section-title">
     
      
      <br> <br>

    </div>

     
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende Portugués - Módulos de Aprendizaje</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #28a745; /* Color sólido para el encabezado */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            color: white; /* Color blanco para el texto del encabezado */
            margin: 0;
        }
        .container {
            padding: 20px;
        }
        .module-button {
            display: block;
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            color: white;
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .module-button:hover {
            opacity: 0.8;
        }
        .module-1 { background-color: #007bff; }
        .module-2 { background-color: #17a2b8; }
        .module-3 { background-color: #ffc107; }
        .module-4 { background-color: #28a745; }
        .module-5 { background-color: #dc3545; }
        .module-6 { background-color: #6f42c1; }
        .module-7 { background-color: #e83e8c; }
        .module-8 { background-color: #fd7e14; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Aprende Portugués</h1>
    </div>

    <div class="container">
        <a role="button" class="module-button module-1" href="views/expressions.php">
            1️⃣ **Aprenda as Expressões Essenciais em Português** 🌐
        </a>
        <a role="button" class="module-button module-2" href="views/pronouns.php">
            2️⃣ **Pronomes Pessoais** 🔰
        </a>
        <a role="button" class="module-button module-3" href="views/presentation.php">
            3️⃣ **Apresentação Pessoal** 🔰
        </a>
        <a role="button" class="module-button module-4" href="views/greetings.php">
            4️⃣ **Saudações e Cumprimentos** 🌟
        </a>
        <a role="button" class="module-button module-5" href="views/conjunctions.php">
            5️⃣ **Conjunções e Conectores** 🌟
        </a>
        <a role="button" class="module-button module-6" href="views/verbs.php">
            6️⃣ **Verbos e Conjugação** 💬
        </a>
        <a role="button" class="module-button module-7" href="views/grammar.php">
            7️⃣ **Gramática Básica** 📘
        </a>
        <a role="button" class="module-button module-8" href="views/vocabulary.php">
            8️⃣ **Vocabulário e Frases** 📚
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

  








</section><!-- End Categories Section -->


<section id="audio" class="audio">
<div class="header">
        <h1>Bienvenido a Aprende Portugués</h1>
    </div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <!-- Aquí puedes incluir tus metaetiquetas, enlaces a estilos CSS, scripts, etc. -->
</head>
<body>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Pronúncia em Português</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            background-color: #fff; /* Fondo blanco */
            font-family: Arial, sans-serif;
            color: #333; /* Texto negro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #009688; /* Verde */
        }

        select {
            padding: 10px;
            font-size: 18px;
            border: 2px solid #009688; /* Verde */
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #009688; /* Verde */
            color: #fff; /* Texto blanco */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #00796b; /* Verde oscuro */
        }

        #audioPlayer {
            margin-top: 20px;
        }

        #links {
            margin-top: 20px;
        }

        #links a {
            display: inline-block;
            margin: 5px;
            padding: 5px 10px;
            background-color: #009688; /* Verde */
            color: #fff; /* Texto blanco */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #links a:hover {
            background-color: #00796b; /* Verde oscuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praticar Pronúncia em Português</h1>
        <div id="wordList">
            <select id="wordSelect">
                <option value="buenasnoches">Buenas Noches</option>
                <option value="adios">Adiós</option>
                <option value="hastaluego">Hasta Luego</option>
                <!-- Adicione más palabras aquí -->
            </select>
            <button onclick="playAudio()">Ouvir Pronúncia</button>
        </div>
        <div id="audioPlayer"></div>
    </div>
    <script src="pronunciacion/script.js"></script>
</body>
</html>


</section>
  

   <!-- ======= Clases Section ======= -->
<section id="clases" class="clases">

  

    <div class="container">

      <div class="section-title">
        <h2>Agenda <BR> <BR> <BR> </h2>       </div>
  

        <iframe src="https://calendar.google.com/calendar/embed?src=masterpcmaster176%40gmail.com&ctz=America%2FLima" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>


    </div>
       
    
    </div>
  </section><!-- End Clases Section -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/listarEstudiantes.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/takephoto.js"></script>
  
<!-- si no esta registrado el usuario muestra esto -->
<?php else: ?>
  <?php 
      require 'html/home.html';
      ?>
    <?php endif; ?>
</body>
</html>