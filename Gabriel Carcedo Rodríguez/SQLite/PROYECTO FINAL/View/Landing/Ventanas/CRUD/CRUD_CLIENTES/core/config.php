<?PHP
function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="crud";

$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;
}
