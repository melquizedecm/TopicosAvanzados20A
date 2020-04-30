<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Mensajes WhatsApp
# Authors: Juan Martinez Aké
# Description:  Envio de mensajes en whatsapp con libreria en JS
#
#Funciones:
#Liberias JS para el Envio de correos
#
******************************************************************************
-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contaco WhatsApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  	<!-- menu de opciones -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Forms -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="ws.js"></script>
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
  					<li class="active"><a href="#">PDF</a></li>
  					<li class="active"><a href="Graficas.php">Graficas</a></li>
  				</ul>
  			</div>
      </nav>
      </form>
      <div class="container">
        <h2>Envio de mensaje WhatsApp</h2>
        <div class="form-group">
          <label for="number">Numero:</label>
          <input type="text" class="form-control" id="number" placeholder="Numero de celular" name="number">
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <input type="text" class="form-control" id="mensaje" placeholder="Mensaje" name="send">
        </div>
        <button type="submit" class="btn btn-default" id="send_message">Enviar Mensaje</button>
    </div>
  </body>
</html>
