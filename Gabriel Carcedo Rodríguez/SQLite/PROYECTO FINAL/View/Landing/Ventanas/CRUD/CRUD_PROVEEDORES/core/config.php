<?PHP
function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="ale_marentes";

$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;
}


/* Inserta los valores en la tabla users
$sql="INSERT INTO users (full_name, number_phone)".
 	" VALUES ('Ana Perez', '9993278423')";

$link=conectar();
$link->query($sql);
*/