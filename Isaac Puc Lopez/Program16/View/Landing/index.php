<?php
session_start();
if (!isset($_SESSION['user'])) {
   header('location: ../Login/login.php');
 } 


?>




<!DOCTYPE html>
<!--
Source:     Inicio.html.
Description:  Pagina de inicio de la lavandería La Piramide
Date      20/Feb/20.
Author:     Proyecto IMI.
-->
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lavanderia la piramide</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <a class="navbar-brand" href="#">La piramide</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Controller/CerrarSesion.php">Cerrar Sesión</a>  <!--Me redirecciona al controlador para cerrar la sesión (internamente)-->
          </li>
        </ul>
      </div>
  </nav>

 <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">La pirámide</h1>
        <h2 class="masthead-subheading mb-0">Página de precios y servicios extras</h2>  
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Precios de lavado</h2>
            <p>
              <table class="table-hover">
                <tr>
                  <td>Kilo de ropa normal</td>
                  <td class="text-center">$10</td>
                </tr>
                <tr>
                  <td>Kilo de ropa muy sucia</td>
                  <td class="text-center">$15</td>
                </tr>
                <tr>
                  <td>Almohada</td>
                  <td> G   M   CH
$70 $60  $50</td>
                </tr>
                <tr>
                  <td>Cobertor</td>
                  <td> G   M   CH
$65 $55  $45</td>
                </tr>
                <tr>
                  <td>Kilo de ropa express</td>
                  <td class="text-center">$15</td>
                </tr>
                <tr>
                  <td>Hamcas</td>
                  <td class="text-center">$55</td>
                </tr>
              </table>

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid" src="img/02.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Membresía</h2>
            <p>Gracias a la membresía en La piramide es posible acceder a ciertas ventajas y servicios que ofrecemos desde nuestra página web, además de promociones disponibles solo para miembros de La piramide, para registrarte como miembro visita nuestro local ubicado en: Mérida Yucatán Calle 71 B local 3, entre 128 B y 128 E, colonia Bosques del poniente</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Tiempos de lavado</h2>
            <p>Una de las ventajas de la membresía en La piramide es que puedes dejar tu ropa lavando y cuando esté lista y totalmente limpia te llegará un mensaje a tu dispositivo celular para poder venir a buscar tu ropa apenas haya salido del lavado y así no tener la incertidumbre de cuando ir a buscar tu ropa</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Proyecto IMI 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>