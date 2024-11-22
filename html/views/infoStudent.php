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
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  #agregarPaquete{display:none;}
  </style>
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

     

     <div class="about-me container">

  <div class="section-title">
    <h2>Información estudiante</h2>
  </div>
  
  <div class="row">
    <?php 
      $variable = $_GET['estudiante'];
      //echo "el Id es: " .$variable;
      
      $sql="SELECT * from students WHERE Id='$variable'";
      $stm = $conn->query($sql);

      foreach($stm as $mostrar){
        $var=$mostrar['Id'];
       // echo $var;
      ?>
    <div class="col-lg-4" data-aos="fade-right">
      <img src="<?php echo $mostrar['foto'] ?>" width="300px" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Documento de Identidad:</strong> <span><?php echo $mostrar['Id'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Nombre:</strong> <span><?php echo $mostrar['Nombre'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Apellido:</strong> <span><?php echo $mostrar['Apellidos'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Telefono:</strong> <span><?php echo $mostrar['telefono'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> 
            <span>
              <?php
            
              $dateNac = DateTime::createFromFormat("Y-m-d", $mostrar['fecha_nac']);
              $hoy = new DateTime();
              $edad = date_diff($hoy,$dateNac);
              
             
              echo $edad->format("%y")
              
              ?>
            </span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Estado:</strong>
            <span>
            <?php
            $datenew = DateTime::createFromFormat("Y-m-d", $mostrar['fecha_fin']);
            if($datenew>$hoy){
                    echo 'Activo';
                  }
                  else{
                    echo 'Inactivo';
                  }
                  
            ?>
            </span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Inicio de Paquete de Clases actual:</strong> <span><?php echo $mostrar['fecha_inicio'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Fin de Paquete de Clases actual:</strong> <span><?php echo $mostrar['fecha_fin'] ?></span></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span><?php echo $mostrar['telefono'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Dirección:</strong> <span><?php echo $mostrar['direccion'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Fecha de Nacimiento:</strong> <span><?php echo $mostrar['fecha_nac'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Contacto Acudiente:</strong> <span><?php echo $mostrar['tel_acudiente'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Tipo de Paquete de Clases:</strong> <span><?php echo $mostrar['paquete'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Correo</strong><span><?php echo $mostrar['email'] ?></span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Notas</strong><span><?php echo $mostrar['observaciones'] ?></span></li>
          </ul>
        </div>
      </div>
      <?php 
	        }
	              ?>
    </div>
  </div>

</div><!-- End About Me -->
<br>
<br>
<div class="container">
  <form action="updateClases.php" method="POST" enctype="multipart/form-data" role="form"> 

  <button class="btn btn-warning" id="desplegar" onclick="showPackage();">Agregar Paquete de Clases</button>
       
  <br>
  <br>
  <input name="id" class="form-control" id="name" type="hidden" value="<?php echo $variable?>">
  <div class="container" id="agregarPaquete">
    <button class="btn btn-outline-warning" id="desplegar" onclick="hidePackage();">Ocultar</button>
    <br>
    <br>

    <div class="row">
      <div class="col-md-4"> </div>
        <div class="col-md-4" style="align: center">
          <label>Fecha de Inicio</label>
          <input type="date" class="form-control" name="dateBegin" id="dateComienzo" required>
          <br>
        </div>

      </div>
        
      <div class="row">
        <div class="col-md-4"> </div>
          <div class="col-md-4" style="align: center">
            <label>Fecha de Finalización</label>
            <input type="date" class="form-control" name="dateEnd" id="dateFinish" required>
            <br>
          </div>

      </div>

      <div class="row">
        <div class="col-md-4"> </div>
          <div class="col-md-4" style="align: center">
          <label>Paquete de Clases</label>
          <select class="form-select" aria-label="Default select example" name = "paquete">
            <option value="4">4 clases</option>
            <option value="6">6 Clases</option>
            <option value="8">8 Clases</option>
            <option value="16">16 Clases</option> 
          </select>
            <br>
          </div>

        <div class="row">
          <div class="col-md-4"> </div>
            <div class="col-md-4" style="align: center">
              <label>Notas</label>
              <br>
              <input type="text" class="form-control" name="observaciones" id="observaciones">
              <br>
        </div>

       </div>

      <div class="rowCenter">
        <br>
        <input  class="btn btn-warning" name="update_class" type="submit" value="Actualizar Paquete de Clases"></input>
        
        <br>
      </div>

      </form>
  </div>
  <br>


  
  <script>
    function showPackage(){
      document.getElementById('agregarPaquete').style.display='block';
    }

    function hidePackage(){
      document.getElementById('agregarPaquete').style.display='none';
    }
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>