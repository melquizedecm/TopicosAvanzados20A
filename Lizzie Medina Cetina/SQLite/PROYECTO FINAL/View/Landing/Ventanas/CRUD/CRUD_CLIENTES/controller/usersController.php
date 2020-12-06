<?php
require_once("../core/config.php");
require_once("../model/Users.php");

if (isset($_REQUEST['Id_Clientes_create'])){
$mensaje=create();
}
elseif (isset($_REQUEST['Id_Clientes_edit'])){
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
function create(){
$Users= new Users();
$datos=[];
$datos[0]=$_REQUEST['Id_Clientes_create'];
$datos[1]=$_REQUEST['Nombre'];
$datos[2]=$_REQUEST['Ap_Paterno'];
$datos[3]=$_REQUEST['Ap_Materno'];
$datos[4]=$_REQUEST['Id_Direccion'];
$datos[5]=$_REQUEST['Id_Frecuencia'];
$respuesta= $Users->create($datos);
if (!$respuesta){
$mensaje="Error al guardar";
}
else{
$mensaje="Registro Guardado";
}
return $mensaje;
}
function edit(){
$Users=new Users();
$fila=$Users->readId($_REQUEST[md5('id')]);
return $fila;
}
function read(){
$Users=new Users();
$tabla=$Users->read();
return $tabla;
}
function update(){
$Users= new Users();
$datos=[];
$datos[0]=$_REQUEST['Id_Clientes_edit'];
$datos[1]=$_REQUEST['Nombre'];
$datos[2]=$_REQUEST['Ap_Paterno'];
$datos[3]=$_REQUEST['Ap_Materno'];
$datos[4]=$_REQUEST['Id_Direccion'];
$datos[5]=$_REQUEST['Id_Frecuencia'];
$respuesta= $Users->update($datos);
if (!$respuesta){
$mensaje="Error al actualizar";
}
else{
$mensaje="Registro Actualizado";
}
$datos[6]=$mensaje;
return $datos;
}
function delete(){
	$int=0;
	if($int==0)
	{
$Users=new Users();
$respuesta=$Users->delete($_REQUEST[md5('delete')]);
if (!$respuesta){
$mensaje="Error al eliminar el Registro";
//echo "<script type='text/javascript'>alert('$mensaje');</script>";
}
else{
$mensaje="Registro Eliminado Exitosamente";
//echo "<script type='text/javascript'>alert('$mensaje');</script>";
}
}
else{
	$mensaje="USTED NO ESTÁ AUTORIZADO BORRAR REGISTROS";
	echo "<script type='text/javascript'>alert('$mensaje');</script>";
}
return $mensaje;
}