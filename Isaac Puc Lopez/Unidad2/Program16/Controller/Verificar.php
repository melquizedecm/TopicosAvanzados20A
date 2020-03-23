<?php

	if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {

		$nombre= trim($_POST['inputText']);			//si se envia por POST se recibe con POSTs
		$password= $_POST['inputPassword'];
		echo "Bienvenido ".$nombre;
	}else{
		echo "Error. Debes rellenar campos";
		header("location: ../index.php");	//te regresa a la pagina donde rellenas los datos
	}
	

		//echo $nombre.$password;	//para concatenar en php se pone .
	//echo $nombre;

	if ($nombre=='Juan') {
		echo " Bienvenido";
	}else{
		echo " Pero no tanto";
	}


?>