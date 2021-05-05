<!--
	**************************************************************************
	# Programa Name: usersController.php
	# Authors: Josue Antonio Castro Colli. 
	# Description: ES EL CONTROLADOR DE TODAS LAS FUNCIONES CREADAS.
	# DATE: 13 / MAYO / 2020
	**************************************************************************
-->
<?php
/*ENLAZA LOS ARCHIVOS PARA PODER HACER USO DE LAS FUNCIONES AHÍ CREADAS*/
require_once("../core/config.php");
require_once("../model/Users.php");

/*ANALIZA EL VALOR QUE SE LE HA MANDADO EN LA VISTA PRINCIPAL PARA SABER QUE FUNCION EJECUTARA SEGÚN LA ACCIÓN QUE SE HAYA PEDIDO*/
if (isset($_REQUEST['full_name_create'])){
	/*SI SE ESTABLECE EL INPUT CON EL IDENTIFICADOR "full_name_create" ENTONCES SE EJECUTARÁ LA FUNCION CREATE QUE REALIZARÁ UN NUEVO REGISTRO CON LOS VALORES INGRESADOS*/
$mensaje=create();
}
elseif (isset($_REQUEST['full_name_edit'])){
	/*SI SE ESTABLECE EL INPUT CON EL IDENTIFICADOR "full_name_edit" ENTONCES SE EJECUTARÁ LA FUNCION UPDATE*/
$datos=update();
}
elseif(isset($_REQUEST[md5('id')])){
	/*SI EL ID ESTA ESTABLECIDO ENTONCES LA FUNCIÓN QUE SE EJECUTA ES LA DE EDITAR*/
$datos=edit();
}
elseif(isset($_REQUEST[md5('delete')])){
	/*SI LA VARIABLE DELETE ESTÁ ESTABLECIDA ENTONCES BORRARÁ EL REGISTRO Y MOSTRARÁ LA NUEVA TABLA SIN EL REGISTR QUE HA SIDO BORRADO*/
$mensaje=delete();
$tabla=read();
}
else{
	/*SI NINGUNA DE LAS CONDICIONES SE CUMPLE UNICAMENTE LEE LOS DATOS QUE ESTÁN ALMACENADOS EN LA BASE DE DATOS*/
$tabla=read();
}



/*LA FUNCION CREATE CREA UN OBJETO DE LA CLASE USERS Y ESTABLECE LOS DATOS EN UN ARREGLO LOS CUALES ALMACENA LOS NUEVOS PARAMETROS A INGRESAR, LLAMA A LA FUNCION CREATE DE USERS Y MANDA ESE ARREGLO CON LOS DATOS ESTABLECIDOS, ESTE RECIBE LA RESPUESTA DE LA FUNCIÓN Y MUESTRA UN MENSAJE EN PANTALLA*/
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
/*LA FUNCION EDIT CREA UN OBJETO DE LA CLASE USERS, LLAMA A LA FUNCION READID Y LE ENVIA EL PARAMETRO DEL ID ENCRIPTADO, ESTO DEVUELVE UN ARREGLO CON LOS VALORES ALMACENADOS DE ESE REGISTRO*/
function edit(){
$Users=new Users();
$fila=$Users->readId($_REQUEST[md5('id')]);
return $fila;
}
/*LA FUNCION READ CREA UN OBJETO DE LA CLASE USERS, LLAMA A LA FUNCION READ DE ESA CLASE Y DEVUELVE UN ARREGLO CON LOS VALORES ALMACENADOS DE ESE REGISTRO*/
function read(){
$Users=new Users();
$tabla=$Users->read();
return $tabla;
}


/*LA FUNCION UPDATE CREA UN OBJETO DE LA CLASE USERS Y ESTABLECE LOS DATOS EN UN ARREGLO LOS CUALES ALMACENA LOS NUEVOS DATOS, LLAMA A LA FUNCION UPDATE DE USERS Y MANDA ESE ARREGLO CON LOS DATOS ESTABLECIDOS, ESTE RECIBE LA RESPUESTA DE LA FUCNION Y MUESTRA UN MENSAJE EN PANTALLA*/
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
/*LA FUNCION DELETE CREA UN OBJETO DE LA CLASE USERS, LLAMA A LA FUNCIÓN DELETE DE ESA CLASE ENVIANDO COMO PARAMETRO EL ID ENCRIPTADO, ESTO DEVUELVE UNA RESPUESTA DE LA BASE DE DATOS, SEGUN LA REPSUESTA MOSTRARÁ UN MENSAJE EN PANTALLA*/
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