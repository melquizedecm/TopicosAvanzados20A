<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	function create($datos){
		$sql="INSERT INTO PEDIDO (Id_Producto, Id_Ingrediente, Id_Vendedor, Id_Precio) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function read(){
		$sql="SELECT * FROM PEDIDOS";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	function readId($id_provedor){
		$sql="SELECT * FROM PEDIDOS WHERE Id_Pedido='".$Id_Pedido."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	function update($datos){
		$sql="UPDATE PEDIDOS SET Id_Producto='".$datos[1]."', Id_Ingrediente='".$datos[2]."', Id_Vendedor='".$datos[3]."', Id_Precio='".$datos[4]."' WHERE Id_Pedido='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	function delete($id){
		$sql="DELETE FROM PEDIDOS WHERE Id_Pedido='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}