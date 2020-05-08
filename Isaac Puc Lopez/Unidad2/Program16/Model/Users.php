<?php
requiere_once '../Core/conexion.php';

class Users{
	function create(){

	}

	function read(){
		$sql="SELECT * FROM user";	//preparamos la consulta
		$link= conectar();			//nos conectamos a la base de datos
		$tabla= $link->query(sql);	//ejecutamos la consulta
		return tabla;				//retornamos los valores
	}

	function update(){

	}

	function delate(){

	}
	
}