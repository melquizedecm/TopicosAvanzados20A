<?php require_once("../controller/usersController.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>EDITAR REGISTROS DE PEDIDOS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #000;
		background: #f5f5f5;
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
		color: #500000;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #500000;
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
		color: #500000;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #500000;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #ffffff;
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
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #000;
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
		<h2>Editar</h2>
		<p class="hint-text">Edita y Actualiza tus Pedidos.</p>
		<p class="hint-text">Ingrese los datos según su ID.</p>
		
		<!--<p class="hint-text"><?php if(isset($datos[3])) {echo $datos[3]; } ?></p>-->
		<input type="hidden" name="Id_Pedido" value="<?php echo $datos[0]?>">
		
        <div class="form-group">
			<div class="row">
				<div class="col-xs-12"><input type="text" class="form-control" name="Id_Producto_edit"  
					value="<?php echo $datos[1] ?>" placeholder="Producto" required="required"></div>

			</div>        	
        </div>
        <div class="form-group">
        	<input type="phone" class="form-control" name="Id_Ingrediente" value="<?php echo $datos[2] ?>" placeholder="Ingrediente" required="required">
        </div>
        <div class="form-group">
        	<input type="phone" class="form-control" name="Id_Vendedor" value="<?php echo $datos[3] ?>" placeholder="Vendedor" required="required">
        </div>
        <div class="form-group">
        	<input type="phone" class="form-control" name="Id_Precio" value="<?php echo $datos[4] ?>" placeholder="Precio" required="required">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Actualizar</button>
        </div>
    </form>
	<div class="text-center">Presiona aquí para ir a-><a href="index.php">PEDIDOS</a></div>
</div>
</body>
</html> 