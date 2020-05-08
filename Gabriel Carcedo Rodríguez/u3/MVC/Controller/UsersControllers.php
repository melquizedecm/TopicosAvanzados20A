<?php

requiere_once("../../core/config.php");
requiere_once("../../model/Users.php");

if(isset($_REQUEST['full_name_create']))
{
	create();
}

$tabla=read();


function create()
{
	$Users=new Users();
	$datos=[];
	$datos[0]=$_REQUEST['full_name_create'];
	$datos[1]=$_REQUEST['number_phone_create'];
	$respuesta = $Users->create($datos);
	if(!$respuesta)
	{
		$mensaje="ERROR AL GUARDAR";
	}
	else
	{
		$mensaje="RESGISTRO GUARDADO";
	}
}
function read()
{
	$Users=new Users();
	$tabla=$Users->read();
	return $tabla;
}
function update()
{
	
}
function delete()
{
	
}