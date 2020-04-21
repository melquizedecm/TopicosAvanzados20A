<?php
require_once("../../../Lib/verificar_sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                Correo
            </title>
        </meta>
       <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../Lib/css/bootstrap.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!---extras-->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--footer-->
<link rel="stylesheet" type="text/css" href="../../../Lib/fontsmenu.css">
  <link rel="stylesheet" type="text/css" href="../../../Lib/footer.css">
        </link>
    </head>
    <body>
        <!--cabecera-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#collapseExample" data-toggle="collapse" ria-expanded="false">Nosotros <span class="sr-only">(current)</span></a>

        <!---informacion que cura--->
      
<div class="collapse" id="collapseExample">
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
          <a class="dropdown-item" href="Pasteles.php">Pasteles</a>          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedidos.html">Pedidos</a>
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
        <a class="nav-link" href="../../../Controller/Cerrar_Sesion.php">Cerrar sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Login/Login.html">Registrarse</a>
      </li>
      </ul>
    </span>
  </div>
</nav>


        <!---correo--->
        <div id="app" style="padding-top: 8rem;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Nombre:
                        </label>
                        <input class="form-control" type="text" v-model="from_name" placeholder="Alejandra">
                        </input>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Asunto:
                        </label>
                        <input class="form-control" type="text" v-model="subject" placeholder="Ya esta listo">
                        </input>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Correo:
                        </label>
                        <input class="form-control" type="email" v-model="to_email" placeholder="Ale@Marentes.com">
                        </input>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Mensaje:
                        </label>
                        <textarea class="form-control" v-model="message" placeholder="El postre que pidio esta...">
                        </textarea>
                    </div>
                    <br>
                    <div class="col-sm-6 col-sm-offset-3 text-center">
                      <center>  <button @click="enviar" class="btn btn-success">
                            Enviar
                        </button></center>
                    </div>
                </div>
            </div>
        </div><br>

        <!---footer--->
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js">
        </script>
        <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript">
        </script>
        <script>
            (function(){
                emailjs.init("user_kBAjtobrHfNJQE6aygFN8");
             })();
            const vue = new Vue({
                el: '#app',
                data(){
                    return {
                        from_name: '',
                        to_email: '',
                        message: '',
                        subject: '',
                    }
                },
                methods: {
                    enviar(){
                        let data = {
                            from_name: this.from_name,
                            to_email: this.to_email,
                            message: this.message,
                            subject: this.subject,
                        };
                        
                        emailjs.send("default_service","template_SfWnu8Xd", data)
                        .then(function(response) {
                            if(response.text === 'OK'){
                                alert('El correo se ha enviado de forma exitosa');
                            }
                           console.log("SUCCESS. status=%d, text=%s", response.status, response.text);
                        }, function(err) {
                            alert('Ocurrió un problema al enviar el correo');
                           console.log("FAILED. error=", err);
                        });
                    }
                }
            });
        </script>
    </body>
</html>