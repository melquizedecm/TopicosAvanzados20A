<?PHP
	/*FUNCION QUE CREA LAS VARIABLES CON LOS DATOS PARA ACCEDER A LA BASE DE DATOS Y SE CONECTA UTILIZANDO ESTOS VALORES, RETORNA EL LINK DE LA CONEXIÓN ESTABLECIDA*/
function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="proyecto";

$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;
}


/* Inserta los valores en la tabla users
$sql="INSERT INTO users (full_name, number_phone)".
 	" VALUES ('Ana Perez', '9993278423')";

$link=conectar();
$link->query($sql);
*/