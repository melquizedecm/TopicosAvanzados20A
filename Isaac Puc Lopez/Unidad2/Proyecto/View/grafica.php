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
		<title>La Pirámide| Gráfica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1 id="titulo" >La Pirámide</h1>
						<h3>Lavandería</h3>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="nota.php">Generar nota</a></li>
								<li class="current"><a href="grafica.php">Kilos lavados (Gráfica)</a></li>
								<li><a href="contacto.php">Contactanos</a></li>
								<li><a href="../Controller/CerrarSesion.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</section>

			<!-- Main -->
				<script>
				window.onload = function () {

				var options = {
					animationEnabled: true,  
					//Titulo
					title:{
						text: "Ropa lavada por mes"
					},
					axisY: {
						//Eje Y
						title: "Cantidad en kilos",
						valueFormatString: "",
						suffix: "kg"
					},
					data: [{
						type: "area",//Tipo de grafica
						yValueFormatString: "##0\"kg\"",
						//Coordenadas 
						dataPoints: [
							{y: 865, label: "Enero"},
							{y: 720, label: "Febrero"},
							{y: 613, label: "Marzo"},
							{y: 864, label: "Abril"},
							{y: 764, label: "Mayo"},
							{y: 745, label: "Junio"},
							{y: 724, label: "Julio"},
							{y: 612, label: "Agosto"},
							{y: 631, label: "Septiembre"},
							{y: 750, label: "Octubre"},
							{y: 806, label: "Noviembre"},
							{y: 1023, label: "Diciembre"}
						]
					}]
				};
				$("#chartContainer").CanvasJSChart(options);

				}
				</script>
				<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
		
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
			<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
			<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
	</body>
</html>