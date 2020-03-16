<!DOCTYPE html>
<!--
Source:         Program5.html
Description:    Pagina para visualizar el manejo de Web responsivo
Date:           14/Feb/20
Author:         Isaac Puc López
-->

<html>
    <head>
        <title>Programa 5</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    </head>

    <body >	

        <form class="needs-validation" action="../../Controller/Login.php" method="POST">
          <div class="card-body">        

            <div class="cards col-lg-8">
    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">User Name</label>
          <input type="text" class="form-control" name="inputUser" placeholder="Escribe tu nombre de usuario..." required>
        </div>
    </div>
    

    <!--<div class="row">
        <div class="col-md-4 mb-3">
          <label for="validationCustomUsername">E-mail</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" >@</span>
            </div>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
            </div>
          </div>
    </div>-->

    <div class="form-row">
            <div class="col-md-4 mb-3">
          <label for="validationCustom02">Password</label>
          <input type="Password" class="form-control" name="inputPassword" placeholder="Escribe la contraseña..." required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        </div>
    
  <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
 
  
    
  

            </div>
   </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
    </body>
</html>