<!--/*************************************************************************
****************************************************************************** 
# Program Name: CRUD.php
# Authors: GAbriel Carcedo Rodríguez
# Description: CRUD que alberga datos eon descripción
               Modelo-Vista-Controlador, que se enlaza
               a una Base de Datos

#Funciones:
# create() // Controla las creaciones de los registros y los 
			  manda a la base de datos.

# edit() // Controla el flujo de las ediciones de la  BD.

# read() //Controla la lectura de la Base de Datos.

# update() //Controla las actualizaciones de los registros
			 de la tabla que son mandados a la BD.

# delete() //Controla los borrados de la tabla y por lo tanto,
			 los de la Base de Datos
******************************************************************************
*****************************************************************************/-->


<?php

//LLAMADO A LA CONEXIÓN CON LA BD
require_once("../core/config.php");

//LLAMADA AL MODELADO DE LA BD
require_once("../model/Users.php");

//FUNCIONES PARA DETERMINAR EL USO DE LAS ACCIONES DEL CRUD
if (isset($_REQUEST['full_name_create'])){
$mensaje=create();
}
elseif (isset($_REQUEST['full_name_edit'])){
$datos=update();
}
elseif(isset($_REQUEST[md5('id')])){
$datos=edit();
}
elseif(isset($_REQUEST[md5('delete')])){
$mensaje=delete();
$tabla=read();
}
else{
$tabla=read();
}

//FUNCIÓN DE CREACIÓN
function create(){
$Users= new Users();
$datos=[];
$datos[0]=$_REQUEST['full_name_create'];
$datos[1]=$_REQUEST['number_phone'];
$datos[2]=$_REQUEST['trabajador'];
$respuesta= $Users->create($datos);
if (!$respuesta){
$mensaje="Error al guardar";
}
else{
$mensaje="Registro Guardado";
}
return $mensaje;
}

//FUNCIÓN DE EDICIÓN
function edit(){
$Users=new Users();
$fila=$Users->readId($_REQUEST[md5('id')]);
return $fila;
}

//FUNCIÓN DE LECTURA
function read(){
$Users=new Users();
$tabla=$Users->read();
return $tabla;
}

//FUNCIÓN DE ACTUALIZACIÓN
function update(){
$Users= new Users();
$datos=[];
$datos[0]=$_REQUEST['id_merma'];
$datos[1]=$_REQUEST['full_name_edit'];
$datos[2]=$_REQUEST['number_phone'];
$datos[3]=$_REQUEST['trabajador'];
$respuesta= $Users->update($datos);
if (!$respuesta){
$mensaje="Error al actualizar";
}
else{
$mensaje="Registro Actualizado";
}
$datos[4]=$mensaje;
return $datos;
}

//FUNCIÓN DE BORRADO
function delete(){
$Users=new Users();
$respuesta=$Users->delete($_REQUEST[md5('delete')]);
if (!$respuesta){
$mensaje="Error al eliminar el Registro";
}
else{
$mensaje="Registro Eliminado Exitosamente";
}
return $mensaje;
}