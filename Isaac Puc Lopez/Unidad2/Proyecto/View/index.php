<!--Codigo que conecta con el PHP de Login que confirma si la cuenta y la contra es correcta para dirigir al usuario a la pagina -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
   header('location: Login/index.php');
 }
?>



<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>La Pirámide| Lavandería</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1 id="titulo" >La Pirámide</h1>
						<h3>Lavandería</h3>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<!--Establecimiento de los apartados de la paginas-->
								<li class="current"><a href="index.php">Inicio</a></li>
								<li><a href="nota.php">Generar nota</a></li>
								<li><a href="grafica.php">Kilos lavados (Gráfica)</a></li>
								<li><a href="contacto.php">Contactanos</a></li>
								<li><a href="../Controller/CerrarSesion.php">Cerrar Sesión</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<section id="banner">
							<!--Establecimiento del contenido del apartado de Inicio-->
							<header>
								<h2>Precios de lavado</h2>
								<table class="table-hover" id="tabla_precios">
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
					                  <td> G   M   CH $70 $60  $50</td>
					                </tr>
					                <tr>
					                  <td>Cobertor</td>
					                  <td> G   M   CH $65 $55  $45</td>
					                </tr>
					                <tr>
					                  <td>Kilo de ropa express</td>
					                  <td class="text-center">$15</td>
					                </tr>
					                <tr>
					                  <td>Hamacas</td>
					                  <td class="text-center">$55</td>
					                </tr>
					            </table>
							</header>
						</section>
				</section>
					<!-- Copyright -->
						<div id="copyright">
							<ul class="links">
								<li>Dising by: Puc-Arias-León</li><li>Powered by: HTML5 UP</li>
							</ul>
						</div>
			

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>