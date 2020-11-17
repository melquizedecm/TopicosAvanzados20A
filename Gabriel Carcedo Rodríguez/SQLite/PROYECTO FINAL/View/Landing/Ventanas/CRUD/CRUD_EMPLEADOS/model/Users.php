<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO VENDEDOR (Id_Vendedor, Nombre, Ap_Paterno, Ap_Materno) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM VENDEDOR";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_empleados){
		$sql="SELECT * FROM VENDEDOR WHERE Id_Vendedor='".$Id_Vendedor."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE VENDEDOR SET Id_Vendedor='".$datos[0]."', Nombre='".$datos[1]."', Ap_Paterno='".$datos[2]."', Ap_Materno='".$datos[3]."' WHERE Id_Vendedor='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM VENDEDOR WHERE Id_Vendedor='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}