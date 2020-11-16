<?php
require_once("../core/config.php");
require_once("../model/Users.php");

if (isset($_REQUEST['Nombre_create'])){
$mensaje=create();
}
elseif (isset($_REQUEST['Nombre_edit'])){
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
$datos[0]=$_REQUEST['Nombre_create'];
$datos[1]=$_REQUEST['Ap_Paterno'];
$datos[2]=$_REQUEST['Ap_Materno'];
$datos[3]=$_REQUEST['Telefono'];
$datos[4]=$_REQUEST['Id_Direccion'];
$datos[5]=$_REQUEST['Id_Frecuencia'];
$respuesta= $Users->create($datos);
if (!$respuesta){
echo "Error al guardar";
}
else{
echo "Registro Guardado";
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
$datos[0]=$_REQUEST['Id_Clientes'];
$datos[1]=$_REQUEST['Nombre_edit'];
$datos[2]=$_REQUEST['Ap_Paterno'];
$datos[3]=$_REQUEST['Ap_Materno'];
$datos[4]=$_REQUEST['Telefono'];
$datos[5]=$_REQUEST['Id_Direccion'];
$datos[6]=$_REQUEST['Id_Frecuencia'];
$respuesta= $Users->update($datos);
if (!$respuesta){
echo "Error al actualizar";
}
else{
echo "Registro Actualizado";
}
$datos[7]=$mensaje;
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