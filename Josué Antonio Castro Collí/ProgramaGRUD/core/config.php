<!--
	**************************************************************************
	# Programa Name: config.php
	# Authors: Josue Antonio Castro Colli. 
	# Description: SE CONECTARA A LA BASE DE DATOS.
	# DATE: 13 / MAYO / 2020
	**************************************************************************
-->
<?PHP
	/*FUNCIÓN QUE CREA LAS VARIABLES CON LOS DATOS PARA ACCEDER 
	A LA BASE DE DATOS Y SE CONECTA ÚTILIZANDO ESTOS VALORES, 
	RETORNA EL LINK DE LA CONEXIÓN ESTABLECIDA*/
function conectar(){
	//SE DEBE CONFIGURAR LOS VARIABLES
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="crud";

$link = mysqli_connect($server,$user,$password,$basedatos);
return $link;
}

/* 
ESTE CÓDIGO ES PARA INSERTAR LOS VALORES EN LA TABLA USERS MANUALMENTE. 

$sql="INSERT INTO users (full_name, number_phone)".
 	" VALUES ('Ana Perez', '9993278423')";

$link=conectar();
$link->query($sql);
*/