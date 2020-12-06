<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO NOTA_ENTREGA (Fecha_Hora, Id_Pedido, Id_Clientes) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM NOTA_ENTREGA";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($Id_Nota){
		$sql="SELECT * FROM NOTA_ENTREGA WHERE Id_Nota='".$Id_Nota."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE NOTA_ENTREGA SET Id_Pedido='".$datos[2]."', Id_Clientes='".$datos[3]."' WHERE Id_Nota='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM NOTA_ENTREGA WHERE Id_Nota='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}