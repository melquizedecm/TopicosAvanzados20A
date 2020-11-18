<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO CLIENTES (Nombre, Ap_Paterno, Ap_Materno, Id_Direccion, Id_Frecuencia) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."', '".$datos[4]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
		if (!$respuesta2) {
			echo $this->link->error;
		}else{
			return $respuesta2;
		}
	}

	function read(){
		$sql="SELECT * FROM CLIENTES";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_clientes){
		$sql="SELECT * FROM CLIENTES WHERE Id_Clientes='".$Id_Clientes."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE CLIENTES SET Nombre='".$datos[1]."', Ap_Paterno='".$datos[2]."', Ap_Materno='".$datos[3]."', Id_Direccion='".$datos[4]."', Id_Frecuencia='".$datos[5]."' WHERE Id_Clientes='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
		if (!$respuesta2) {
			echo $this->link->error;
		}else{
			return $respuesta2;
		}
	}

	function delete($id){
		$sql="DELETE FROM CLIENTES WHERE Id_Clientes='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
		/*if (!$respuesta2) {
			echo $this->link->error;
		}else{
			return $respuesta2;
		}*/
	}
}