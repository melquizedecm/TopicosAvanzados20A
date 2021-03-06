<!--/*************************************************************************
****************************************************************************** 
# Program Name: Pasteles.php
# Authors: Gabriel Carcedo Rodríguez
# Description: Página para visualizar los pasteles con los que
               cuenta la empresa

#Fecha: 01 de Abril de 2020
******************************************************************************
*****************************************************************************/-->

<?php
require_once("../../../Lib/verificar_sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../Lib/css/bootstrap.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!--script para carrousel-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
	<title>Pasteles</title>
   <!---codigo para la grafica--->
<script src="../../../Lib/canvasjs.min.js"></script>
<!--footer-->
<link rel="stylesheet" type="text/css" href="../../../Lib/fontsmenu.css">
  <link rel="stylesheet" type="text/css" href="../../../Lib/footer.css">

</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../Index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#collapseExample1" data-toggle="collapse" ria-expanded="false">Nosotros <span class="sr-only">(current)</span></a>

        <!---informacion que cura--->
      
		<div class="collapse" id="collapseExample1">
		  <div class="card card-body bg-light">
		   Sabemos lo importantes que son tus momentos en familia y en Ale Marentes queremos ser parte de ellos.
		Queremos ofrecerte productos de la mejor calidad y diseño, es por eso que estamos en constante mejora y evolución para adaptarnos a tus gustos y necesidades.
		  </div>
		</div>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Postres.php">Postres</a>          
        </div>
      </li>
       <li class="nav-item">
          <?php
          require_once('../../../Lib/Grafica.php');
          ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pedidos.html">Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tabla.php">Personal</a>
      </li>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="Correo.php">Correo</a>
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
      <li class="nav-item">
        <a class="nav-link" href="../../../Controller/Cerrar_Sesion.php">Cerrar sesión</a>
      </li>
     


      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="../Login/Login.html">Registrarse</a>
      </li>
      </ul>
    </span>
  </div>
</nav>

<!--titulo chido-->
<div class="texto">
		<h2>Pasteles</h2>
		<br>
		<p>www.AleMarentes.com</p>
	</div>


<!--Imagenes; información que cura--->

<div class="card-deck">
  <div class="card">
    <img src="pasteles/1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pateles de boda</h5>
      <p class="card-text">Para que sea un día inolvidable.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pasteles para una ocasión especial</h5>
      <p class="card-text">Para recordar a los que no estan con nosotros.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pastel de 3 leches</h5>
      <p class="card-text">Tu escojes el estilo, estamos a tus ordenes.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
</div>

<br>
<!---segunda fila--->
<div class="card-deck">
  <div class="card">
    <img src="pasteles/4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Personalizados</h5>
      <p class="card-text">Para esa ocasión especial.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tropical</h5>
      <p class="card-text">Pastel de 3 leches con  coctel de frutas.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Premiun</h5>
      <p class="card-text">Pastel de chocolate, ingredientes extras al gusto.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
</div>
<br>
<!---tercera fila---->
<div class="card-deck">
  <div class="card">
    <img src="pasteles/7.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pastel cubierto de chocolate</h5>
      <p class="card-text">Pastel de chocolate rellena con mermelada de fresa.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/8.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pastel de chocolate</h5>
      <p class="card-text">Pastel de chocolate rellena con fresas y nuez.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
  <div class="card">
    <img src="pasteles/9.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pastel con oreo</h5>
      <p class="card-text">Pastel de 3 leches con oreo.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Cotiza con nosotros.</small>
    </div>
  </div>
</div>
<br>


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
                        <a href="https://www.facebook.com/AleMarentess/"><img src="../../../Lib/iconos/facebook.png"></a>
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <a href="https://www.instagram.com/marentes_ale/?hl=es-la"><img src="../../../Lib/iconos/instagram.png"></a>
                        <label>Siguenos en Instagram</label>
                    </div> 
                     <div class="row">
                        <a href="https://api.whatsapp.com/send?phone=529691036691&text=Buen día, ¿que me recomendaría?"><img src="../../../Lib/iconos/whatsapp.png"></a>
                        <label>Comunicate por WhatsApp</label>
                    </div>                               


                </div>

                <div class="colum3">

                    <h1>Informacion Contacto</h1>

                    <div class="row2">
                        <img src="../../../Lib/iconos/house.png">
                        <label>Calle: 37 s/n 66 y 68.</label>
                    </div>

                    <div class="row2">
                        <img src="../../../Lib/iconos/smartphone.png">
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