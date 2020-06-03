<?php
/*
Verificar el usuario que se esta ingresando  para mantener una sesión abierta
*/

if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {
	# code...

$nombre = trim($_POST['inputText']);
$pass = trim($_POST['inputPassword']);

if($nombre=='Juan'){
	echo "Bienvenido".$nombre;
}else{
	echo "Usuario equivocado >:v ".$nombre;
}

//echo "Bienvenido:".$nombre;
}else{
	//echo "Error en la pagina: debes ingresar tus datos";
	header('location: ../index.php');
}

//echo $nombre.'---'.$pass;
//echo $nombre;
