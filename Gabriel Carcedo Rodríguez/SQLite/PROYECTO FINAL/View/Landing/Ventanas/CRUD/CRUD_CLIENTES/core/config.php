<?PHP
function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="ale_marentes";

$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;
}
