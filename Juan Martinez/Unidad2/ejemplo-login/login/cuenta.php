<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Inicio
# Authors: Juan Martinez Aké
# Description: Primera vista general con el menu de opciones para realizar diversas funciones implementadas
#
#Funciones:
#Se implemento cada aparto con sus respectivas librerias en JS para el funcionamiento de
#Envio de Correos
#Mensajes en WS
#Graficas
#Archivos PDF
#Metodo POST se implemento en cada una de las vistas para los forms 
******************************************************************************
-->
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<!-- menu de opciones -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- Tabla -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA EN S.I</h1>
	</div>
	<p></p>
	<form class="w3-container" action="controller_login.php" method="post">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">

				<ul class="nav navbar-nav">
					<li class="active"><a href="Correos.php">Correo</a></li>
					<li class="active"><a href="WS.php">WhatsApp</a></li>
					<li class="active"><a href="PDF.php">PDF</a></li>
					<li class="active"><a href="Graficas.php">Graficas</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h2>Control de Inventarios</h2>
			<div class="container">
				<h3>Inventario</h3>
				<p>Medicamentos</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Cantidad</th>
							<th>Producto</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>142563</td>
							<td>30</td>
							<td>Paracetamol</td>
						</tr>
						<tr>
							<td>345768</td>
							<td>20</td>
							<td>Ampicilina</td>
						</tr>
						<tr>
							<td>436758</td>
							<td>15</td>
							<td>Ketorolaco</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
</body>
</html>
