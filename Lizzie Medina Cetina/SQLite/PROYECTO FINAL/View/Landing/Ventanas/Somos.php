<!--/*************************************************************************
****************************************************************************** 
# Program Name: Somos.php
# Authors: Gabriel Carcedo Rodríguez
# Description: Página para visualizar la misión y propósito
               de la empresa, así como a qué se dedica

#Fecha: 01 de Abril de 2020
******************************************************************************
*****************************************************************************/-->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Somos</title>
</head>
<body>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../Index.html">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Ventanas/Postres.html">Postres</a>
          <a class="dropdown-item" href="Ventanas/Pasteles.html">Pasteles</a>          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedidos.html">Pedidos</a>
      </li>
    </ul>
    <span class="navbar-text">
    	<!---inicio de sesion-->
    	 <!--   <form class="form-inline my-2 my-lg-0">
      
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="Ventanas/Login.html">Iniciar sesión</button>
      <br>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="#">Registrase</a></button>
    </form>-->
     <ul class="navbar-nav mr-auto">

     	<!--ventana para iniciar sesión-->
      	 <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Iniciar sesión
        </a>
       <form class="dropdown-menu p-2">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Correo electronico</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Ale@correo.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Contraseña</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="*******">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Recordar usuario
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar</button>
</form>


      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login/Login.html">Registrarse</a>
      </li>
      </ul>
    </span>
  </div>
</nav>
<br><br><br>
<!---información que cura-->
<h1>¿Quiénes somos?<span class="badge badge-secondary"></span></h1>


<div class="row">
	<div class="card col-md-4" id="Card">
  <div class="card-body">
  	<p class="text-justify">En pocas palabras, somos gente de lo más normal. Simplemente nos gusta un montón nuestro trabajo, nos lo pasamos bien haciéndolo y nos encanta la idea de que haya gente que también disfrute con nuestros productos y con nuestra forma de trabajar. Si tú eres de ellos, aquí tienes tu sitio. Y si no, danos una oportunidad y verás cómo conseguimos alegrarte el día.</p>


  	<div class="card bg-dark text-white">
  <img class="card-img" src="somos/1.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    <p class="card-text"></p>
  </div>
</div>
  </div>
</div>
</div>
</body>
</html>