<?php
require_once("../core/config.php");
require_once("../model/Users.php");

if (isset($_REQUEST['Id_Vendedor_create'])){
$mensaje=create();
}
elseif (isset($_REQUEST['Id_Vendedor_edit'])){
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
$datos[0]=$_REQUEST['Id_Vendedor_create'];
$datos[1]=$_REQUEST['Nombre'];
$datos[2]=$_REQUEST['Ap_Paterno'];
$datos[3]=$_REQUEST['Ap_Materno'];
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
$datos[0]=$_REQUEST['Id_Vendedor_edit'];
$datos[1]=$_REQUEST['Nombre'];
$datos[2]=$_REQUEST['Ap_Paterno'];
$datos[3]=$_REQUEST['Ap_Materno'];
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