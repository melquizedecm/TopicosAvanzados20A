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
<!--footer-->
<link rel="stylesheet" type="text/css" href="../../../Lib/fontsmenu.css">
  <link rel="stylesheet" type="text/css" href="../../../Lib/footer.css">

	<title>Postres</title>
  <!---codigo para la grafica--->
<script src="../../../Lib/canvasjs.min.js"></script>

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
        <a class="nav-link" href="#nosotros" data-toggle="collapse" ria-expanded="false">Nosotros <span class="sr-only">(current)</span></a>

        <!---informacion que cura--->
      
    <div class="collapse" id="nosotros">
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
          <a class="dropdown-item" href="Pasteles.php">Pasteles</a>          
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
     	<!--ventana para iniciar sesión-->
      	<!-- <li class="nav-item dropdown" >
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


      </li>--->
      <li class="nav-item">
        <a class="nav-link" href="../Login/Login.html">Registrarse</a>
      </li>
      </ul>
    </span>
  </div>
</nav>

<!--titulo chido-->
<div class="texto">
		<h2>Postres</h2>
		<br>
		<p>www.AleMarentes.com</p>
	</div>


<!--Imagenes; información que cura--->

<div class="card-deck">
  <div class="card">
    <img src="postres/1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">pizza brownie</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
  <div class="card">
    <img src="postres/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Chessecake de oreo</h5>
      <p class="card-text">La Cheesecake de oreo es una tarta de textura muy suave que se prepara con la deliciosa galleta Oreo.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
  <div class="card">
    <img src="postres/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pay de queso de bola</h5>
      <p class="card-text">Pay de queso de bola (holandés). Riquísimo postre yucateco.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
</div>
<br>
<!---segunda fila-->
<div class="card-deck">
  <div class="card">
    <img src="postres/4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cheessecake</h5>
      <p class="card-text">es un postre hecho a base de Ricotta, requesón o queso cheddar, queso quark, azúcar y algunas veces otros ingredientes.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
  <div class="card">
    <img src="postres/5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pay de nutella y queso de bola</h5>
      <p class="card-text">Pay de nutella y queso de bola, no te quedes con las ganas de probarlo.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
  <div class="card">
    <img src="postres/6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pay de coctel de frutas</h5>
      <p class="card-text">Mezcla de diferentes frutas cortadas en trocitos y endulzadas con azúcar sobre un pay.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Precio $60</small>
    </div>
  </div>
</div>


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