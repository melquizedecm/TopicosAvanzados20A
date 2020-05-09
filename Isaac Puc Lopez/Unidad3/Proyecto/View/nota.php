<!--Codigo que conecta con el PHP de Login que confirma si la cuenta y la contra es correcta para dirigir al usuario a la pagina -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
   header('location: Login/index.php');
   echo "No está configurado";
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
		<title>La Pirámide| Notas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
        <script src="nota.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />

	
	</head>
	<body class="no-sidebar is-preload">
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
								<li><a href="index.php">Inicio</a></li>
								<li class="current"><a href="nota.php">Nota</a></li>
								<li><a href="grafica.php">Kilos lavados (Gráfica)</a></li>
								<li><a href="contacto.php">Contactanos</a></li>
								<li><a href="crud.php">CRUD</a></li>
								<li><a href="../Controller/CerrarSesion.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</section>

			<!-- Main -->
				<section id="main">
					<center><font size="7"><h1>Nota de pedidos</h1></font></center>
					<div class="container" align="center" style="padding-top: 2em">

						<!-- Contenido Que Estara En La Nota -->
						     <p>Dia:<input type="text" id="Texto1" name="Write Something"></p>
						     <p>Mes:<input type="text" id="Texto2" name="Write Something"></p>
						     <p>Año:<input type="text" id="Texto3" name="Write Something"></p>
						     <p>Nombre:<input type="text" id="Texto4" name="Write Something"></p>
                             <p>Correo:<input type="text" id="Texto5" name="Write Something"></p>
                             <p>Número:<input type="text" id="Texto6" name="Write Something"></p>
                             <p>Servicio:<input type="text" id="Texto7" name="Write Something"></p>
                             <p>KL:<input type="text" id="Texto8" name="Write Something"></p>
                             <p>Extra:<input type="text" id="Texto9" name="Write Something"></p>
                             <p><button type="Submit" onclick="crear()">Generar PDF</button></p>
							  

					</div>
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