<?php
	
	if (isset($_POST['inputText']) && isset($_POST['inputPassword'])){
		//Recibir el nombre del usuario y la contraseña del index.php
		$nombre = trim($_POST['inputText']);
		$password = trim($_POST['inputPassword']);

		//echo 'Bienbenido: '.$nombre;
		//header('location: ../View/LandingPage.php');
		if ($nombre == 'Josue'){
			echo 'Bienbenido';
		}else {
			echo 'Usuario Equivocado';
		}
		
	} else {
		//header('location: ../index.php');
		echo "Error en la página: debes ingresar tus datos";
	}

	//Mostrar el usuario y la contraseña.
	//echo $nombre." --- ". $password;