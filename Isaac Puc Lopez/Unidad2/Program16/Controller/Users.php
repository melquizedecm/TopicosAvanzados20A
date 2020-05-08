<?
require_once '../Model/Users.php';

$User= new User();
$datos=[];
$tabla=[];

	$tabla= $User->read();

	while($fila= $tabla->fech_array(MYSQLI_BOTH)){
		$fila['full_name'];
	}