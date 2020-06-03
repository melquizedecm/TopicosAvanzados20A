<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Grafica de BAR
# Authors: Juan Martinez Aké, Miguel Pech Mena
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
		text: "Stock de Medicamentos"
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
				{ label: "Vandrelo", y: 46},
				{ label: "Gabapentin", y: 60},
				{ label: "Tetraciclina", y: 25},
				{ label: "ketorolaco", y: 10},
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
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<!-- Librerias JS para la funcion y diseño de las grafias-->
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>
