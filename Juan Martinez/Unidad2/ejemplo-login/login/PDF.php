<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Archivos PDF
# Authors: Juan Martinez Aké
# Description:  PDF con libreria en JS
#
#Funciones:
#Liberias JS para la creacion de Archivos en formato PDF
#
******************************************************************************
-->
<html lang="en" dir="ltr">
  <head>
    <title>PDF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <!-- menu de opciones -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <!-- jsPDF library -->
    <script src="js/jsPDF/dist/jspdf.min.js"></script>
    <script src="pdf.js" charset="utf-8"></script>

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

</body>
</html>
