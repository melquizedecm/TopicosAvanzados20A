<!--LLAMAMOS AL ARCHIVO usersController PARA HACER USO DE SUS FUNCIONES-->
<?php require_once("../controller/usersController.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<!--Titulo de la  pagina -->
<title>Registro De Producto</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
        background: #F5B7B1;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
    <form action="" method="post">
    	<!--LE DAMOS EL TITULO AL FROMULARIO PARA QUE TENGA VISTA-->
		<h2>Registro</h2>
		<p class="hint-text">Crea un nuevo registro de producto.s.</p>
		<!--MOSTRARÁ UN MENSAJE UNA VEZ REALIZADA LA FUNCION DE CREAR, YA SEA EXITOSA 
			O FALLIDA PARA QUE EL USUARIO CONOZCA LO QUE SUCEDIÓ-->
		<p class="hint-text"><?php if(isset($mensaje)) {echo $mensaje; } ?></p>
		
        <div class="form-group">
			<div class="row">
				<!--LE PONEMOS EL IDENTIFICADOR AL INPUT PARA HACER USO DE LA INFORMACION INGRESADA EN LAS FUNCIONES-->
				<div class="col-xs-12"><input type="text" class="form-control" name="full_name_create" placeholder="Product_Name" required="required"></div>

			</div>        	
        </div>
        <div class="form-group">
        	<!--LE PONEMOS EL IDENTIFICADOR AL INPUT PARA HACER USO DE LA INFORMACION INGRESADA EN LAS FUNCIONES-->
        	<input type="phone" class="form-control" name="number_phone" placeholder="Precio" required="required">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
        </div>
    </form>
    <!--NOS PERMITE REGRESAR A LA VISTA GENEREAL DE LOS USUARIOS EN CUALQUIER MOMENTO-->
	<div class="text-center">Presiona aquí para -><a href="index.php"> Regresa a la tabla</a></div>
</div>
</body>
</html> 