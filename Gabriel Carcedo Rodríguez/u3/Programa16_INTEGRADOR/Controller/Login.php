<!--
Sorce: Login.php
Description: Use of the Function POST in a Login Verification
Date: 12/Mar/2020
Author: Gabriel Carcedo Rodríguez
        Lizzie G. Medina Cetina
        Daniel O. Bacab González
-->
<?php
/*
1.obtener los valores
2.filtrar y configurar el contenido
3.validar
4.regresar una respuesta
*/
	
		//obtener los valores
		if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
			$username = $_POST['inputUser'];
			$password = $_POST['inputPassword'];
			
		

		//2. filtrar los datos
		$username = trim($username);
		$password = trim($password);
		//$username = md5($username)

		//3,4 Validar respuesta

		if($username == 'dano' && $password == '1234' ){
			session_start();
			$_SESSION['usuario'] = $username;
			header('location: ../View/Landing/index.php');
			
		}else{
			header('location: ../View/Login/Login.php');
			
			//echo 'Error de usuario';
		}
}
/*
if (isset($_POST['inputUser']) && isset($_POST['inputPassword'])) {

$nombre = trim($_POST['inputUser']);
$pass = trim($_POST['inputPassword']);

if($nombre=='Daniel'){
	header('location: ../View/Landing/')
}else{
	header('location: ..View/Login/Login.php')
//echo "Bienvenido:".$nombre;
}else{
	//echo "Error en la pagina: debes ingresar tus datos";
	header('error de usaurio');
}*/
