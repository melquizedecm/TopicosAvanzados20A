<!--/*************************************************************************
****************************************************************************** 
# Program Name: conexion.php
# Authors: Gabriel Carcedo Rodríguez
# Description: Conecta el software a la Base de Datos
			   que se desarrollo en el localhost de
			   phpMyAdmin

#Fecha: 01 de Abril de 2020
******************************************************************************
*****************************************************************************/-->

<?php  

<?php

	class BaseDatos extends SQLite3
	{
		function __construct()
		{
			$this->open("Proyecto_Final.db");
		}
	}

	$db = new BaseDatos();

	if($db)
	{
		echo "<p>La Base de Datos se abrió";
	}
	else
	{
		echo "<p>La Base de Datos NO se abrió";
	}


?>

/*//configurar variables
DBserver = "localhost";
DBuser = "";
DBpass = "";
DBdatos = "user";

$link = mysqli_connect(DBserver,DBuser,DBpass,DBdatos);

echo $link;*/

?>