<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Grafica de PIE y BAR
# Authors: Juan Martinez Aké
# Description:  Graficas con libreria en JS
#
#Funciones:
#Liberias JS para el diseño de Graficas
#
******************************************************************************
-->
<html>
<head>
<meta charset="UTF-8">
<title>Graficos</title>
<!-- Evento JS para la funcionalidad de graficas -->
<script type="text/javascript">
window.onload = function() {
var options = {
	title: {
		//Titulo Grafica
		text: "Ventas Generales"
	},
	data: [{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			//eje x e y para nombre y valor
			dataPoints: [
				{ label: "Enero", y: 30},
				{ label: "Febrero", y: 36},
				{ label: "Marzo", y: 40},
				{ label: "Abril", y: 50},
				{ label: "Mayo", y: 55},
				{ label: "Junio", y: 59},
				{ label: "Julio", y: 64},
				{ label: "Agosto", y: 66},
				{ label: "Septiembre", y: 70},
				{ label: "Octubre", y: 70},
				{ label: "Noviembre", y: 80},
				{ label: "Diciembre", y: 85},
			]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<p></p>
<script type="text/javascript">
window.onload = function() {
var options = {
	title: {
		//Titulo Grafica
		text: "Medicamentos mas Vendidos"
	},
	data: [{
			type: "bar",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			//eje x e y para nombre y valor
			dataPoints: [
				{ label: "Paracetamol", y: 70},
				{ label: "Ketorolaco", y: 46},
				{ label: "Ampicilina", y: 60},

			]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<!-- menu de opciones -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<p></p>
	<form class="w3-container" action="controller_login.php" method="post">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">

				<ul class="nav navbar-nav">
					<li class="active"><a href="cuenta.php">Home</a></li>
					<li class="active"><a href="Correos.php">Correo</a></li>
					<li class="active"><a href="WS.php">WhatsApp</a></li>
					<li class="active"><a href="PDF.php">PDF</a></li>
					<li class="active"><a href="Graficas.php">Graficas</a></li>
				</ul>
			</div>
		</nav>
	</form>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<!-- Librerias JS para la funcion y diseño de las grafias-->
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>
