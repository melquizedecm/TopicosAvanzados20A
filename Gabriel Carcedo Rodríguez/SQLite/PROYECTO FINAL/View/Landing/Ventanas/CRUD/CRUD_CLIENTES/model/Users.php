<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO CLIENTES (Id_Clientes, Nombre, Ap_Paterno, Ap_Materno, Id_Direccion, Id_Frecuencia) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."', '".$datos[4]."', '".$datos[5]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT CLIENTES.Id_Clientes, CLIENTES.Nombre, CLIENTES.Ap_Paterno, CLIENTES.Ap_Materno, TELEFONO.Telefono, FRECUENCIA.Frecuencia FROM CLIENTES, TELEFONO, FRECUENCIA WHERE TELEFONO.Id_Telefono=CLIENTES.Id_Clientes AND FRECUENCIA.Id_Frecuencia=CLIENTES.Id_Frecuencia";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($Id_Clientes){
		$sql="SELECT * FROM CLIENTES WHERE Id_Clientes='".$Id_Clientes."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE CLIENTES SET Id_Clientes='".$datos[0]."', Nombre='".$datos[1]."', Ap_Paterno='".$datos[2]."', Ap_Materno='".$datos[3]."', Id_Direccion='".$datos[4]."', Id_Frecuencia='".$datos[5]."' WHERE Id_Clientes='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
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
	}
}