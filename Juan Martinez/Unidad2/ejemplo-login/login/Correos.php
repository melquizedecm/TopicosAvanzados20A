<!DOCTYPE html>
<!--********************************************************************************************
# Program Name: Envio de correo
# Authors: Juan Martinez Aké
# Description:  Envio de correo con libreria en JS
#
#Funciones:
#Liberias JS para el Envio de correos
#
******************************************************************************
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Contato Email
            </title>
        </meta>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        </link>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <!-- menu de opciones -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <h2>Envio de Correos</h2>
        <div id="app" style="padding-top: 8rem;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Nombre:
                        </label>
                        <input class="form-control" type="text" v-model="from_name">
                        </input>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Asunto:
                        </label>
                        <input class="form-control" type="text" v-model="subject">
                        </input>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                        <label>
                            Correo:
                        </label>
                        <input class="form-control" type="email" v-model="to_email">
                        </input>
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
      </form>
    </body>
</html>
