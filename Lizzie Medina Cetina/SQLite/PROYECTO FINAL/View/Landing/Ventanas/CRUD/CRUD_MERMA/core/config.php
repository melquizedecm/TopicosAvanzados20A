<!--/*************************************************************************
****************************************************************************** 
# Program Name: CRUD.php
# Authors: GAbriel Carcedo Rodríguez
# Description: CRUD que alberga datos eon descripción
               Modelo-Vista-Controlador, que se enlaza
               a una Base de Datos

#Funciones:
# conectar() // Estructura las variables para la conexión de la
				tabla con la Base de Datos

# mysqli_connect($server, $user, $password, $basedatos) // crea 
				la ligadura con la base de datos
******************************************************************************
*****************************************************************************/-->


<?PHP

//FUNCIÓN PARA CONECTAR LA BASE DE DATOS EN EL SERVIDOR
function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="crud";

//FUNCIÓN PARA LA LIGADURA CON LA BASE DE DATOS sql
$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;
}


/* Inserta los valores en la tabla users
$sql="INSERT INTO users (full_name, number_phone)".
 	" VALUES ('Ana Perez', '9993278423')";

$link=conectar();
$link->query($sql);
*/