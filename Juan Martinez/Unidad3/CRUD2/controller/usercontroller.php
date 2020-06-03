<?php
require_once("../core/conexion.php");
require_once("../model/user.php");

if(isset($_REQUEST['full_name'])){
  $mensaje = create();
}
elseif (isset($_REQUEST['full_name'])) {
  $mensaje = update();
}
elseif (isset($_REQUEST['id'])) {
  $datos = update();
}

$tabla = read();

function create(){
$User = new User();
$dato = [];
$dato[0] = $_REQUEST['full_name'];
$dato[1] = $_REQUEST['number_phone'];
$respuesta = $User -> create($dato);
if (!$respuesta) {
  $mensaje = "Error al crear";
}else {
  $mensaje = "Registro Exitoso";
}
return $mensaje;
}

function read(){
$User = new User();
$tabla = $User -> read();
return $tabla;
}

function update(){
$User = new User();
$fila = $User -> readId($_REQUEST['id']);
return $fila;
}

function delete(){

}

?>
