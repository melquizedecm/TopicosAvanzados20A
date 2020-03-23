<?php
/*RECEPCION Y VALIDACION DEL LOGIN
*1.OBTENER LOS VALORES
*2.FILTRARN Y CONFIGURAR EL CONTENIDO
*3.VALIDAR
*4.REGRESAR UNA RESPUESTA
*/

//1.OBTENER VALORES
if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
$username = $_POST['inputUser'];
$password = $_POST['inputPassword'];
}
//2.FILTRAR Y CONFIGURAR EL CONTENIDO
$username=trim($username);
$password=trim($password);
//$username=md5($username);

//3.VALIDAR Y REGRESAR UNA RESPUESTA
if($username == 'Lizzie' && $password == '1234'){
	session_start();
	$_SESSION['usuario'] = $username;
	header('location: ../View/Landing/LandingPage_Ale_Marentes/index.php');
}else{

	header('location: ../View/Login/Login.php');
}