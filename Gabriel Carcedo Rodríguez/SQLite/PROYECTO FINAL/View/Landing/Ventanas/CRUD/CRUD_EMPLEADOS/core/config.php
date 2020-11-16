<?PHP

	function conectar(){
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
	}


	/*$db = new BaseDatos();
	
	if($db)
	{
		echo "<p>La Base de Datos se abrió";
	}
	else
	{
		echo "<p>La Base de Datos NO se abrió";
	}*/

/*function conectar(){
	$server="localhost";
	$user="root";
	$password="";
	$basedatos="crud";

$link= mysqli_connect($server,$user,$password,$basedatos);
return $link;


}*/
