<?php
/*
* RECEPCIÓN Y VALIDACIÓN DEL LOGIN
*1. OBTENER LOS VALORES
*2. FILTRAR EL CONTENIDO
*3. VALIDAR
*4. REGRESAR UNA RESPUEDTA
*/
if(isset($_POST['inputName']) && isset($_POST['inputUser']) && isset($_POST['inputPassword']))
{
	//OBTENER VALORES y FILTRADO DE CONTENIDO
	$name = md5(trim($_POST['inputName']));
	$user = md5(trim($_POST['inputUser']));
	$password = md5(trim($_POST['inputPassword']));

	$nombre = md5(trim('GABRIEL'));
	$usuario = md5(trim('gabriel'));
	$contrasena = md5(trim('1234'));

	//VALIDACIÓN
	if($name==$nombre && $user==$usuario && $password==$contrasena)
	{
		//REGRESAR RESPUESTA
		session_start();
		$_SESSION['NOMBRE']=$name;
		/*$_SESSION['USUARIO']=$user;
		$_SESSION['CONTRASENA']=$password;*/

		header("location: ../View/LandingPage/");
	}
	else
	{
		//REGRESAR RESPUESTA
		header("location: ../View/Login/login.php");
	}
}
else
{
	//REGRESAR RESPUESTA
	header("location: ../View/Login/login.php");
}

?>