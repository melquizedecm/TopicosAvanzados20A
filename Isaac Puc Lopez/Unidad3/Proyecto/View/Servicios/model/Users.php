<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	/*FUNCION PARA CREAR DATOS, RECIBE UN ARREGLO CON LOS VALORES DE CADA UNO DE LOS INPUTS Y LOS COLOCA EN SUS RESPECTIVOS CAMPOS DENTRO DE LA BASE DE DATOS, AL FINALIZAR ENVIA UN MENSAJE SI HA OCURRIDO ALGUN PROBLEMA O ENVIA EL NUEVO REGISTRO */
	function create($datos){
		$sql="INSERT INTO servicios (name, cost) VALUES ('".$datos[0]."', '".$datos[1]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	/*FUNCION QUE OBTIENE TODOS LOS DATOS ALMACENADOS EN LA BASE DE DATOS Y LOS DEVUELVE EN UNA TABLA*/
	function read(){
		$sql="SELECT * FROM servicios";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	/*ESTA FUNCIÓN RECIBE COMO PARAMETRO UN ID Y SELECIONA TODOS LOS CAMPOS DE ESE REGISTRO, LOS DEVUELVE EN UNA TABLA*/
	function readId($id_user){
		$sql="SELECT * FROM servicios WHERE id_servicios='".$id_user."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}

	/*RECIBE UN ARREGLO LLAMADO DATOS Y REESCRIBE LOS VALORES EN CADA UNO DE LOS CAMPOS, RETORNA UNA RESPUESTA YA SEA DE ERROR O DE EXITO AL REALIZAR LA ACTUIALIZACION DE LOS DATOS SEGUN LA BASE DE DATOS*/
	function update($datos){
		$sql="UPDATE servicios SET name='".$datos[1]."', cost='".$datos[2]."' WHERE id_servicios='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	/*RECIBE COMO PARAMETRO EL ID DE UN REGISTRO Y ELIMINA TODOS LOS CAMPOS DE ESE REGISTRO CON EL ID CORRESPONDIENTE, RETORNA UNA RESPUESTA YA SEA DE ERROR O EXITO SEGUN LA BASE DE DATOS, HAYA O NO CUMPLIDO LA INDICACION*/
	function delete($id){
		$sql="DELETE FROM servicios WHERE id_servicios='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}