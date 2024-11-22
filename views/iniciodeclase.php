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
            url: "../index.php",
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
        <h2>Listado</h2>
        <p>Alumnos de Guitarra</p>
      </div>

     <div class="container">
  
    
   
            <table class="table">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
          
 





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
              
              $sql="SELECT * from students WHERE categoria='funny'";
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
        <p>Listado</p>
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