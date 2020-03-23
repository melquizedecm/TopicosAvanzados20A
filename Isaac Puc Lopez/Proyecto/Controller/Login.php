<?php
	
	/* RECEPCION Y LALIDACION DEL LOGIN
	*1. OBTENER LOS VALORES
	*2. FILTRAR Y CONFIGURAR EL CONTENIDO
	*3. VALIDAR
	*4. REGRESAR UNA RESPUESTA
	*/

	//1. OBTENER VALORES
	$username = $_POST['inputUser'];
	$password = $_POST['inputPassword'];

	//2. FILTRAR Y CONFIGURAR EL CONTENIDO
	$username = trim($username);
	$password = trim($password);
	//$username = md5($username);

	//3. VALIDAR
	if ($username=="lavanderia@gmail.com" && $password=="1234") {
		session_start();		//para que la sesion inicie (funcion de php)
		$_SESSION['user']=$username;

	 	header("location: ../View/index.php");
	 } else{
	 	unset($_SESSION['user']);
    	session_destroy();
	 	header("location: ../View/Login/index.php");

	 }


?>