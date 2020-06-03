<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO provedor (full_name, number_phone, direccion) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM provedor";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_provedor){
		$sql="SELECT * FROM provedor WHERE id_provedor='".$id_provedor."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE provedor SET full_name='".$datos[1]."', number_phone='".$datos[2]."', direccion='".$datos[3]."' WHERE id_provedor='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM provedor WHERE id_provedor='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}