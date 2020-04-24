<!DOCTYPE html>
<!--
Sorce: Login
Description: Web page for view how drive the Responsive Web
Date: 13/Marzo/2020
Author: Mario Steven Leon Garcia
-->
<html>
    <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="../../Lib/bootstrap/css/bootstrap.min.css" ></script>

    	<title>Programa 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <p></p>
    <div class="row">
        <div class="card col-lg-6 form-row align-items-center mx-auto">
	<p></p>
	    <img src="https://web.nubox.com/Login/Content/img/nbx-avatar_login.svg" class="card-img-top col-lg-4"> 
	    <div class="card-body">
	    <div class="col-auto">
      		<label class="sr-only" for="inlineFormInput">Name</label>
      		<input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Escribe tu Nombre">
            </div>
	<div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nombre de Usuario">
      </div>
    </div>

   
    <div class="col-auto">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
    </div>
<div class="col-auto">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2">
          Recordar
        </label>
      </div>
    </div>
	<p></p>
	    <div class="col-auto">
      		<button type="submit" class="btn btn-primary mb-2">Entrar</button>
    	    </div>
	    </div>
	</div>
    </div>
    </body>
</html>