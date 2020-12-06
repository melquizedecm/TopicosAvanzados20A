<?php
require_once("../../Lib/verificar_sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Lib/css/bootstrap.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!--script para carrousel-->
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<script src="../../Lib/canvasjs.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../Lib/fontsmenu.css">
  <link rel="stylesheet" type="text/css" href="../../Lib/footer.css">
	<title>Principal</title>



</head>
<body>	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#nosotros1" data-toggle="collapse" ria-expanded="false">Nosotros <span class="sr-only">(current)</span></a>

        <!---informacion que cura--->
      
<div class="collapse" id="nosotros1">
  <div class="card card-body bg-light">

   Sabemos lo importantes que son tus momentos en familia y en Ale Marentes queremos ser parte de ellos.
Queremos ofrecerte productos de la mejor calidad y diseño, es por eso que estamos en constante mejora y evolución para adaptarnos a tus gustos y necesidades.
  </div>
</div>

      </li>
      <!--resto del menu-->
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Ventanas/Postres.php">Postres</a>
          <a class="dropdown-item" href="Ventanas/Pasteles.php">Pasteles</a>          
        </div>
      </li>
      <!--grafica
        <li class="nav-item">
          <?php
          require_once("../../Lib/Grafica.php");
          ?>

      </li>-->
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Ventanas/CRUD/CRUD_EMPLEADOS/view/index.php">VENDEDORES</a>
          <a class="dropdown-item" href="Ventanas/CRUD/CRUD_CLIENTES/view/index.php">CLIENTES</a>
          <!--<a class="dropdown-item" href="Ventanas/CRUD/CRUD_PRODUCTOS/view/index.php">Productos</a>-->
          <a class="dropdown-item" href="Ventanas/CRUD/CRUD_MATERIA_PRIMA/view/index.php">NOTAS DE ENTREGA</a>
          <!--<a class="dropdown-item" href="Ventanas/CRUD/CRUD_MERMA/view/index.php">Merma</a>-->          
          <a class="dropdown-item" href="Ventanas/CRUD/CRUD_PROVEEDORES/view/index.php">PEDIDOS</a>         
        </div>
      </li>
      <!--base de datos algun dia-->
      <li class="nav-item">
        <!--<a class="nav-link" href="Ventanas/pedidos.html">Pedidos</a>-->       
         <li class="nav-item">
        <a class="nav-link" href="Ventanas/Correo.php">Correo</a>
    </li>
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

     	<!--ventana para iniciar sesión
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


      </li>-->
       <li class="nav-item">
        <a class="nav-link" href="../../Controller/Cerrar_Sesion.php">Cerrar sesión</a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link" href="Login/Login.html">Registrarse</a>-->
      </li>
      </ul>
    </span>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagenes/principal.png" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="Imagenes/segundo.jpg" class="d-block w-100" alt="Second slide">
    </div>

     <div class="carousel-item">
      <img src="Imagenes/tercero.jpg" class="d-block w-100" alt="Third slide">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div> <center><img src="Imagenes/principal.png"></center></div>-->


<!---mostrar footer--->
<div>

  <footer>
   <link rel="stylesheet" type="text/css" href="fontsmenu.css">


       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informaci&oacute;n</h1>

                    <p>Nos dedicamos a brindarle un servicio amable con un ambiente acogedor y, sobre todo, excelentes productos elaborados con ingredientes de la más alta calidad, que le generarán una experiencia inolvidable. Si no está satisfecho, agradecemos que nos lo haga saber y con gusto haremos su estancia más placentera.</p></p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <a href="https://www.facebook.com/AleMarentess/"><img src="../../Lib/iconos/facebook.png"></a>
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <a href="https://www.instagram.com/marentes_ale/?hl=es-la"><img src="../../Lib/iconos/instagram.png"></a>
                        <label>Siguenos en Instagram</label>
                    </div> 
                     <div class="row">
                        <a href="https://api.whatsapp.com/send?phone=529691036691&text=Buen día, ¿que me recomendaría?"><img src="../../Lib/iconos/whatsapp.png"></a>
                        <label>Comunicate por WhatsApp</label>
                    </div>                               


                </div>

                <div class="colum3">

                    <h1>Informacion Contacto</h1>

                    <div class="row2">
                        <img src="../../Lib/iconos/house.png">
                        <label>Calle: 37 s/n 66 y 68.</label>
                    </div>

                    <div class="row2">
                        <img src="../../Lib/iconos/smartphone.png">
                        <label>9691036691</label>
                    </div>


                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        &copy; 2020 Todos los Derechos Reservados | <a href="">Bacab_Carcedo_Medina</a>
                    </div>

                    <div class="information">
                        <p>Ale Marentes</p>
                    </div>
                </div>

            </div>
  </footer>

</div>
    
</body>
</html>
