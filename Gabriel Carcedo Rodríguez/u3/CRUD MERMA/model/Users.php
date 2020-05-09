<!--/*************************************************************************
****************************************************************************** 
# Program Name: CRUD.php
# Authors: GAbriel Carcedo Rodríguez
# Description: CRUD que alberga datos eon descripción
               Modelo-Vista-Controlador, que se enlaza
               a una Base de Datos

#Funciones:
# __construct() // construye la ligadura con la Base de Datos

# create() // Manda los valores en cada uno de los atributos
			  de la tabla en cuestión de la Base de Datos

# read() // Lee los datos de la tabla

# readId() // Toma los datos de un registro de la tabla de 
			  acuerdo con su Id

# update() // Actualiza los valores de los atributos de un 
			  registro de la tabla

# delete() // Elimina un registro de la tabla
******************************************************************************
*****************************************************************************/-->


<?php

class Users{
	
	public $link;

	//LA BASE DE DATOS SE CONECTA AL MOMENTO DE QUE LO CONSTRUISTE
	function __construct(){
		$this->link=conectar();
	}

	//FUNCIÓN PARA CREAR LOS REGISTROS DE LA TABLA DE LA BD
	function create($datos){
		$sql="INSERT INTO merma (full_name, number_phone, trabajador) VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."')";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	//FUNCIÓN PARA LEER LOS REGSITROS DE LA TABLA
	function read(){
		$sql="SELECT * FROM merma";
		$tabla=$this->link->query($sql);
		return $tabla;
	}

	
	//FUNCIÓN PARA OBTENER LOS VALORES DEL REGSITRO DE CIERTO id
	function readId($id_merma){
		$sql="SELECT * FROM merma WHERE id_merma='".$id_merma."'";
		$tabla=$this->link->query($sql);
		return $tabla->fetch_array(MYSQLI_BOTH);
	}


	//FUNCIÓN PARA ACTUALIZAR LOS DATOS DE UN REGISTRO DE LA TABALA DE LA BD
	function update($datos){
		$sql="UPDATE merma SET full_name='".$datos[1]."', number_phone='".$datos[2]."', trabajador='".$datos[3]."' WHERE id_merma='".$datos[0]."' ";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}

	//FUNCIÓN PARA ELIMINAR UN REGISTRO DE LA BD
	function delete($id){
		$sql="DELETE FROM merma WHERE id_merma='".$id."'";
		$respuesta=$this->link->query($sql);
		if (!$respuesta) {
			echo $this->link->error;
		}else{
			return $respuesta;
		}
	}
}