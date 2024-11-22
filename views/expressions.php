<?php 

require '../logic/database.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lista De Estudiantes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript" src="../assets/js/listarEstudiantes.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript">
      function local(){
            var con = localStorage.getItem("Categoria");
            var  saved = parseInt(con);
            alert(saved);
            $.ajax({
            type: "POST",
            url: "index.php",
            data: { data: saved },
            dataType: 'json',
            success: function(data) {
                //$('#output').html(data);
                alert(data.mensaje);
            },
            error: function(error) {
                alert(error);
                console.log(error);
            }
        });
};
      </script>
 

  <!-- Favicons -->
  <link href="../assets/img/Suadance sin fondo negro.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/listadoStyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="fotos/regresar.png" width="150">
      </a>
      
      
    </header>

  <!-- Categories Section -->

  
    <div class="container">

      <div class="section-title">
    
  
      </div>

     <div class="container">
  
    
   
     <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Seja muito bem-vindo à Aula 1 do curso!  - Expressões em Português</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f7f9fc; /* Color de fondo más suave */
        margin: 0;
        padding: 0;
    }
    .header {
        background-color: #0056b3; /* Color de encabezado más oscuro */
        color: white;
        padding: 20px;
        text-align: center;
        border-bottom: 4px solid #004494; /* Color de borde más oscuro */
        border-radius: 8px; /* Bordes redondeados */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra más sutil */
        margin-bottom: 40px; /* Espacio debajo del encabezado */
    }
    .container {
        padding: 20px;
    }
    /* Centrando todos los encabezados */
    h1, h2 {
        color: #007bff;
        text-align: center; /* Centra el texto */
    }
    .section-title {
        font-size: 28px; /* Tamaño de fuente ligeramente más grande */
        margin-bottom: 20px;
        color: #0056b3; /* Color del título */
        line-height: 1.5; /* Espaciado entre líneas */
    }
    .section-content {
        margin-bottom: 20px;
    }
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
        margin-bottom: 20px;
        background-color: #ffffff; /* Color de fondo de la tarjeta */
    }
    .audio-player {
        margin: 20px 0;
    }
    .footer {
        text-align: center;
        padding: 15px;
        background-color: #0056b3; /* Color de pie más oscuro */
        color: white;
        border-top: 4px solid #004494; /* Color de borde más oscuro */
    }
    .card-body {
        padding: 20px;
    }
    .card-title {
        font-size: 22px;
        margin-bottom: 15px;
        color: #0056b3; /* Color del título de la tarjeta */
        text-align: center; /* Centra el texto */
    }
    .card-text ul {
        list-style-type: disc;
        margin-left: 20px;
    }
    .audio-controls {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .audio-controls button {
        border: none;
        background: none;
        color: #0056b3; /* Color de los botones */
        cursor: pointer;
    }
    .audio-controls button:hover {
        text-decoration: underline;
    }
    .highlight {
        background-color: #e0efff; /* Color de fondo del resaltado */
        padding: 15px; /* Más espacio en el padding */
        border-radius: 8px; /* Bordes más redondeados */
        margin-bottom: 10px;
    }
    .highlight h4 {
        margin: 0;
    }
    /* Estilos para el botón */
    .btn-play {
        background-color: #0056b3; /* Color del botón */
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-play:hover {
        background-color: #004494; /* Color más oscuro al pasar el mouse */
    }

    /* Media query para dispositivos móviles */
    @media (max-width: 768px) {
        .header {
            padding: 15px; /* Ajusta el padding del encabezado para móviles */
        }
        h1, h2 {
            font-size: 20px; /* Ajusta el tamaño de fuente para móviles */
        }
        .section-title {
            font-size: 20px; /* Ajusta el tamaño de fuente para móviles */
            margin-bottom: 15px; /* Reduce el espacio debajo del título */
        }
        .card-title {
            font-size: 18px; /* Ajusta el tamaño del título de la tarjeta para móviles */
        }
        .card-body {
            padding: 15px; /* Ajusta el padding de la tarjeta para móviles */
        }
        .btn-play {
            padding: 8px 16px; /* Ajusta el tamaño del botón para móviles */
            font-size: 14px; /* Ajusta el tamaño de la fuente del botón */
        }
        .audio-controls {
            flex-direction: column; /* Cambia a columna para botones en móviles */
            align-items: center; /* Centra los botones */
        }
        .audio-controls button {
            margin: 5px 0; /* Espaciado entre botones */
        }
        /* Estilos adicionales para mejorar la experiencia móvil */
        .card {
            margin: 0; /* Elimina márgenes laterales en tarjetas */
            border-radius: 10px; /* Bordes redondeados para tarjetas */
        }
    }
</style>





    </head>
    <body>

    <div class="header" style="background-color: #007bff; color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 40px;">
    <p style="margin: 0; font-size: 2em; font-weight: bold; line-height: 1.2;">"Seja muito bem-vindo à Aula 1</p>
    <p style="margin: 10px 0 0; font-size: 1.5em; font-weight: 300;">Conversando com Elegância:</p>
</div>

<div class="container" style="padding: 20px;">
    <div class="card" style="background-color: white; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px;">
        <div class="card-body">
            <h2 class="section-title" style="font-size: 1.5em; margin-bottom: 20px;">
                Vamos aprender as expressões e a utilidade prática das saudações e despedidas no dia a dia, desde o momento em que cumprimentamos alguém até a hora de nos despedirmos. É importante prestar atenção à diferença entre as diversas formas de cumprimentar e se despedir.
            </h2>
        </div>
    </div>
</div>

 
 
 

<style>
    /* Estilos para dispositivos móviles */
    @media (max-width: 600px) {
        .header p {
            font-size: 1.5em; /* Ajustar tamaño de fuente para móviles */
        }
        .section-title {
            font-size: 1.2em; /* Ajustar tamaño de fuente para móviles */
        }
    }
</style>


 

      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cumprimento Formais / Saludos</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f9;
        color: #333;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center; /* Centra el texto */
    }
    .titulo-azul {
        color: #007bff; /* Color azul */
    }
    .titulo-naranja {
        color: #FF9800; /* Color naranja */
    }

    /* Media query para dispositivos móviles */
    @media (max-width: 768px) {
        h1, h2 {
            font-size: 24px; /* Ajusta el tamaño de fuente para móviles */
            text-align: center; /* Centra el texto también en móviles */
        }
        .table-container {
            padding: 10px; /* Ajusta el padding para móviles */
        }
        th, td {
            font-size: 14px; /* Ajusta el tamaño de fuente para celdas */
            padding: 8px; /* Ajusta el padding para celdas */
        }
        .highlight {
            font-size: 16px; /* Ajusta el tamaño de texto en secciones destacadas */
        }
    }

    .table-container {
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    thead {
        background-color: #007bff;
        color: white;
    }
    th, td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
    }
    th {
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .section-title {
        margin: 20px 0;
        font-size: 1.2em;
    }
    .highlight {
        font-weight: bold;
        color: #333;
    }
    .btn-play {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
    }
    .btn-play:hover {
        background-color: #0056b3;
    }
    audio {
        display: none;
    }
    
</style>

</head>
<body>



    <div class="table-container">
        <table>
        <h1>
    <span class="titulo-azul">Cumprimentos Formais /</span> 
    <span class="titulo-naranja"> Saludos</span>
</h1>
            <caption>Saudações em Português e Español</caption>
            <thead>
                <tr>
                    <th>Português</th>
                    <th>Español</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bom dia!</td>
                    <td>¡Buenos días!</td>
                </tr>
                <tr>
                    <td>Boa tarde!</td>
                    <td>¡Buenas tardes!</td>
                </tr>
                <tr>
                    <td>Boa noite!</td>
                    <td>¡Buenas noches!</td>
                </tr>
                <tr>
                    <td>“Prazer em vê-lo” / “Prazer em conhecê-lo (a)”</td>
                    <td>Un gusto conocerte (Expresa admiración y respeto al encontrar a la persona)</td>
                </tr>
                <tr>
                    <td>Olá! Como vai?</td>
                    <td>Hola, ¿Cómo estás?</td>
                </tr>
                <tr>
                    <td>Oi! Tudo bem?</td>
                    <td>¡Hola! ¿Todo bien?</td>
                </tr>
                <tr>
                    <td>Tudo bem, obrigado (a)</td>
                    <td>Todo bien, gracias.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card">
    <div class="card-body">
        <h1 class="section-title">"Atención estas palabras tienen la misma pronunciación, pero diferentes significados."</h1>
        <p class="highlight" style="text-align: center;">
            <span style="display: inline-block; margin: 0 20px;">
                <strong>Cumprimento</strong><br>
                <img src="cumprimento.png" alt="Imagem de cumprimento" style="width: 200px; height: auto;" />
                <br> ✅ SALUDOS
            </span>
            
            <span style="display: inline-block; margin: 0 20px;">
                <strong>Comprimento</strong><br>
                <img src="comprimento.png" alt="Imagem de comprimento" style="width: 210px; height: auto;" />
                <br> ✅ LONGITUD
            </span>
        </p>
    </div>
</div>
</body>
                    
           
        </div>

        <div class="card">
            <div class="card-body">
                <h2 class="section-title">Outras saudações informais</h2>
              
    
</div>

<div class="container">
    <div class="section-content">
        <p>Existe também uma série de outras saudações informais, usadas principalmente por pessoas mais jovens.</p>
        <p>As que você mais ouvirá são as seguintes:</p>
    </div>

    <div class="highlight">
        <ul>
            <li>“E aí?”</li>
            <li>“E aí, beleza?”</li>
            <li>“Tudo joia?”</li>
            <li>“Tudo beleza?”</li>
            <li>“Tudo em cima?”</li>
            <li>“Tudo certo?”</li>
        </ul>
    </div>

    <div class="section-content">
        <p>“Fala, . . . !” (seguido pelo nome da pessoa ou uma forma de endereço como “meu” ou “cara”, equivalente a ‘homem’, ‘companheiro’ ‘amigo’)</p>
        <p>“Ei, . . . !” (seguido pelo nome da pessoa ou uma forma de endereço como “meu” ou “cara”, equivalente a ‘homem’, ‘companheiro’ ‘amigo’)</p>
    </div>

    <div class="highlight">
        <p>“E aí?”, “Fala…!” e “Ei…!” podem ser combinadas com todas as outras saudações.</p>
        <p>Você pode dizer, por exemplo:</p>
        <ul>
            <li>“E aí, (nome da pessoa ou outra forma de se referir a ela), tudo certo?”</li>
            <li>“Fala, (nome da pessoa ou outra forma de se referir a ela), tudo beleza?”</li>
            <li>“Ei, (nome da pessoa ou outra forma de se referir a ela), tudo joia?”</li>
        </ul>
    </div>

    <div class="section-content">
        <p>Termos que se refere a pessoas:</p>
        <div class="highlight">
            <ul>
                <li>Cara</li>
                <li>Amigo, Amigão</li>
                <li>Moço / Moça</li>
                <li>Meu irmão / Mermão</li>
                <li>Mano</li>
                <li>Broder / Brodi (Brother)</li>
            </ul>
        </div>
    </div>

    <div class="section-content">
        <p>…Siguiendo con los saludos informales para utilizar con grupos de personas…</p>
    </div>

    <div class="highlight">
        <ul>
            <li>E aí moçada, tudo bem?</li>
            <li>E aí meu povo tudo certo?</li>
            <li>E aí turma, tudo bom?</li>
            <li>E aí cambada, tudo certo? (muy informal, entre amigos de mucha confianza)</li>
            <li>Oi galera...</li>
        </ul>
    </div>
</div>
 


       
   
   
            <div class="card-body">
            
        
                      <br>
                      <div style="text-align: center;">
    <img src="fotos/flg.png" alt="Imagem de cumprimento" style="max-width: 100%; height: auto;" />
</div>




               
                </p>
            </div>
        </div>
    <div class="footer">
      
    <p>&copy; 2024 Aprende Portugués. Todos os direitos reservados.
    <a href="expressions2.php">
        <img src="fotos/siguiente.png" width="150" alt="Ir para próximo">
    </a>
</p>

        
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function updatePlaybackRate(audioId) {
            const audio = document.getElementById(audioId);
            const rateControl = document.getElementById('playback-rate-' + audioId);
            audio.playbackRate = rateControl.value;
        }

        // Example function to update time left (replace with actual functionality if needed)
        function updateTimeLeft(audioId, timeLeftId) {
            const audio = document.getElementById(audioId);
            const timeLeft = document.getElementById(timeLeftId);
            audio.ontimeupdate = () => {
                let secondsLeft = Math.ceil(audio.duration - audio.currentTime);
                let minutes = Math.floor(secondsLeft / 60);
                let seconds = secondsLeft % 60;
                timeLeft.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            };
        }

        updateTimeLeft('audio-intro', 'time-left-intro');
        updateTimeLeft('audio-saudacoes', 'time-left-saudacoes');
    </script>
</body>
</html>

 





              <?php
            
            //$num="uwu";
            //echo '<script>alert("HOLLLAA'.$num.'");</script>';
           
             // require 'listarEstudiantes.js';
             // $num->listar();
              
             // echo '<script> alert("HOLLLAA'.$num.'");</script>';
          
              //$sql="SELECT * from students WHERE categoria=funny";
              //$sql="SELECT * from students WHERE categoria=junior";
              //$sql="SELECT * from students WHERE categoria=prejuvenil";
              //$sql="SELECT * from students WHERE categoria=juvenilB";
              //$sql="SELECT * from students WHERE categoria=juvenilM";
              //$sql="SELECT * from students WHERE categoria=juvenilA";
              //$sql="SELECT * from students WHERE categoria=golden";
              $sql="SELECT * from students WHERE categoria='juvenilM'";
              $stm = $conn->query($sql);

              foreach($stm as $mostrar){
                $var=$mostrar['Id'];
                
              ?> 
                <tr>
                
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><img src="<?php echo $mostrar['foto'] ?>" width="50px"></a></td>
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><?php echo $mostrar['Nombre'] ?></a></td>
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><?php echo $mostrar['Apellidos'] ?></a></td>
                <td>

                  <?php 
                  $datenew = DateTime::createFromFormat("Y-m-d", $mostrar['fecha_fin']);
                  $hoy = new DateTime();
                  if($datenew>$hoy){
                    echo 'Activo';
                  }
                  else{
                    echo 'Inactivo';
                  }
                  
                  ?>

                </td>
                
                </tr>
                <?php 
	              }
	              ?>
            </tbody>
        </table>
     </div>

      

      

    </div>
  

  
 <!-- List Section -->

 <section id="list" class="list">
    <div class="container">

      <div class="section-title">
        <h2>Lista de Estudiantes</h2>
  
      </div>

     

      
    </div>
  </section><!-- End List Section -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>