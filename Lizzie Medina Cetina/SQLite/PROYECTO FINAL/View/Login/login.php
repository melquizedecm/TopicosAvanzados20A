<!--
#Program name: Programa 13 Post
#Author: Daniel Bacab Gonzalez
#Description: Login
#Date: 12/Marzo/2020
#Funciones:
Al llenar los datos del login este
valida desde un archivo php llamado
Login.php
-->
<SCRIPT LANGUAGE="JavaScript">
history.forward()
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Scripts/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<!--class="row m-0 justify-content-center align-items-center vh-100"-->
<body>
	
	<div class="row m-0 justify-content-center align-items-center vh-100">
		<div class="card col-md-4" id="Card">
		<div class="card-body" >
			<center><img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" class="card-img-top col-md-4"></center><br>
      
		<form class="px-4 py-3" action="../../Controller/Login.php" method="post">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Usuario</label>
      <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="CosmeFulanito17">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="********">
    </div>
    <!--<div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">Recordar mi usuario</label>
      </div>
    </div>-->
    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
  
		</div> <!-- cierre card body--->
	</div> <!---primera divición del card-->

	</div>
	<!---particulas----->
<script src="Scripts/particles.js"></script>
<script src="Scripts/particulas.js"></script>

</body>
</html>