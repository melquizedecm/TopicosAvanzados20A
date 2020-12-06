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