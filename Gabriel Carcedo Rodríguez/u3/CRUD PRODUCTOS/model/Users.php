<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO users (full_name, number_phone) VALUES ('".$datos[0]."', '".$datos[1]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM users";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_user){
		$sql="SELECT * FROM users WHERE id_user='".$id_user."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE users SET full_name='".$datos[1]."', number_phone='".$datos[2]."' WHERE id_user='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM users WHERE id_user='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}