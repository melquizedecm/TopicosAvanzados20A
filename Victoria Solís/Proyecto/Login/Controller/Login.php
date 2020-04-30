<?php
/* 
RECEPCION Y VALIDACION DEL LOGIN. 
* 1. OBTENER LOS VALORES 
* 2. FILTRAR Y CONFIGURAR EL CONTENIDO 
* 3. VALIDAR 
* 4. REGRESAR UNA RESPUESTA.
*/

//1. OBTENER VALORES 
if (isset($_POST['inputUsuario']) && isset($_POST['inputPassword'])){
		//Recibir el nombre del usuario y la contraseña del index.php
		$usarname = $_POST['inputUsuario'];
		$password = $_POST['inputPassword'];

		// 2. FILTRAR Y CONFIGURAR EL CONTENIDO 
		$usarname = trim('inputUsuario');
		$password = trim('inputPassword');

		// 3. VALIDAR y REGRESAR UNA RESPUESTA.

		if ($usarname == 'Josue' && $password == '1234' ){
			session_start();
			$_SESSION['usuario']=$usarname;
			echo "Bienbenido";
			//header('location: ../View/Login/');
		} else{
			echo 'No valide';
			//header('location: ../View/Login/Login.html');
		}
	}else {
		//header('location: ../index.php');
		echo "Error en la página: debes ingresar tus datos";
	}
