<?php

?>




<!DOCTYPE HTML>
<html lang="en">
  <head>

    <!--------------- MAPA------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        $nth-nav-item-that-needs-margin-right     : 2;
        $width-of-navbar-brand-or-logo-in-px      : 160px;
        $padding-x-for-navbar-brand-or-logo-in-px : 16px;

    @media (min-width: 768px) {
	
        .position-md-absolute {
            position: absolute;
        }
        .navbar-nav .nav-item:nth-child(#{$nth-nav-item-that-needs-margin-right}) {
            margin-right: $width-of-navbar-brand-or-logo-in-px + ($padding-x-for-navbar-brand-or-logo-in-px * 2);
        }
    
    }
        
        #secciones{
            color: red;
            font-weight: bold;
        }
         #secciones-s{
            color: white;
            font-weight: bold;
        }
        
        .carousel-inner img {
          width: 100%;
          height: 70%;
        }
        
        div#tacos{
            width: 70%;
            margin:0px auto;
        }
        
        a#secciones{
            width: 250px;
        }
        
        a img#logo{
            display: block;
            width: 25%;
            margin: auto;        
            
        }
        
        div#h1{
            text-align: center;
            
        }
      </style>

    <title>Nueva Orden - TacosWorld</title>
  </head>
  <body style="background: url(../images/background.jpg)">
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a href="../index.html" class="navbar-brand"><img src="../images/logo.png" style = "width:70px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../Historia.html">Historia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="establishment.php">Distribuidores</a>
      </li>
    </ul>
  </div>
</nav>
    
   <!---------------------------------------------------------FORMULARIO---------------------------------------------------------------------------------->
   <br><br><br><br><br>
   <div id="h1">
    <h1 class="h1 justify-content-md-center">Bienvenido al portal de Mextiza</h1>
    <h6 class=h6>Productos ofrecidos</h6>
   </div>
   <br>
   
   <center>
   
   <?php
                      include('../PHP/Conexion.php');
                        $conection=conectar();

                    if (!$conection) {
                        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                         exit;
                    }
                    $query="SELECT TIPO, NOMBRE, DESCRIPCION, PRECIO FROM PRODUCTO;";
                    $resultado=mysqli_query($conection,$query) or die(mysqli_error($conection));
                    
                      while($consulta =mysqli_fetch_array($resultado)){ 
    ?>
   
   <div id="taqueria" class="shadow p-3 mb-5 bg-white rounded justify-content-md-between" style="background-color: #F2F2F2; width: 85%;">
   <div class="row justify-content-around">
     
     <div class="col-md-6 justify-content-md-center">
        <label for="" class="h4">Información</label>
         <div class="col-12">
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Nombre del producto:
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta['NOMBRE'];?>
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Descripción: 
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta['DESCRIPCION']; ?>
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Precio al público: 
                </div>
                <div class="col-9" style="text-align: left;">
                    $<?php echo $consulta['PRECIO']; ?>.00 MXN
                </div>
             </div>
             
             
         </div>
       </div>
    
    </div>
    <br>
       
    </div>
     <?php } ?>
   </center>
   
   <!------------------------------------------------------------------------------------------------------------------------------------------------>
   
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
  
  
     <!------------------------------------------------------FOOTER ---------------------------------------------------------------->
 <footer class="page-footer font-small blue pt-4" style=" background-color: #454545">

    <!-- Footer Links -->
    
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 " style="background-color: #2E2E2E; color: white">© 2018 Copyright:
      <p>www.mextiza.com</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  
  
</html>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>