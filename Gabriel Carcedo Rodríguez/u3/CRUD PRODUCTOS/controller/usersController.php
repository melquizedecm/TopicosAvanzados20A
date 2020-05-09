<?php
require_once("../core/config.php");
require_once("../model/Users.php");

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
function create(){
$Users= new Users();
$datos=[];
$datos[0]=$_REQUEST['full_name_create'];
$datos[1]=$_REQUEST['number_phone'];
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
$datos[0]=$_REQUEST['id_user'];
$datos[1]=$_REQUEST['full_name_edit'];
$datos[2]=$_REQUEST['number_phone'];
$respuesta= $Users->update($datos);
if (!$respuesta){
$mensaje="Error al actualizar";
}
else{
$mensaje="Registro Actualizado";
}
$datos[3]=$mensaje;
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