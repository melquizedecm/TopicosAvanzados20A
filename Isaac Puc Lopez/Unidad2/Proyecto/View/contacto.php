<?php
session_start();
if (!isset($_SESSION['user'])) {
   header('location: Login/index.php');
   echo "No está configurado";
 }
?>

<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>La Pirámide| Contactanos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../Lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1 id="titulo" >La Pirámide</h1>
						<h3>Lavandería</h3>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="nota.php">Generar nota</a></li>
								<li><a href="grafica.php">Kilos lavados (Gráfica)</a></li>
								<li class="current"><a href="contacto.php">Contactanos</a></li>
								<li><a href="../Controller/CerrarSesion.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</section>

			<!-- Main -->
				<section id="main">
                    <center><h1>Cuentanos tu experiencia!</h1></center>
					<div id="app" style="padding-top: 5rem;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Nombre:
                        </label>
                        <input class="form-control" type="text" v-model="from_name">
                        
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Asunto:
                        </label>
                        <input class="form-control" type="text" v-model="subject">
                        
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Correo:
                        </label>
                        <input class="form-control" type="email" v-model="from_email">
                        
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Mensaje:
                        </label>
                        <textarea class="form-control" v-model="message">
                        </textarea>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 text-center">
                        <button @click="enviar" class="btn btn-success">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js">
        </script>
        <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript">
        </script>
        <script>
            (function(){
                emailjs.init("user_3qPycNR4y0LiXSbVBr7V7");
             })();
            const vue = new Vue({
                el: '#app',
                data(){
                    return {
                        from_name: '',
                        from_email: '',
                        message: '',
                        subject: '',
                    }
                },
                methods: {
                    enviar(){
                        let data = {
                            from_name: this.from_name,
                            from_email: this.from_email,
                            to_email: 'lopezpucisaac@gmail.com',
                            message: this.message,
                            subject: this.subject,
                        };
                        
                        emailjs.send("default_service","template_RzGzci8h", data)
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
				</section>

			<!-- Copyright -->
				<div id="copyright">
					<ul class="links">
						<li>Dising by: Puc-Arias-León</li><li>Powered by: HTML5 UP</li>
					</ul>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>