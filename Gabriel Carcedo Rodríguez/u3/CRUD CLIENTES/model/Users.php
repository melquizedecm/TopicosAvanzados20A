<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO clientes (full_name, number_phone, direccion, frecuencia) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM clientes";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_clientes){
		$sql="SELECT * FROM clientes WHERE id_clientes='".$id_clientes."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE clientes SET full_name='".$datos[1]."', number_phone='".$datos[2]."', direccion='".$datos[3]."', frecuencia='".$datos[4]."' WHERE id_clientes='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM clientes WHERE id_clientes='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}