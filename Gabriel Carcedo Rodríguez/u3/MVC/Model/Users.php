<?php

class Users
{
	public $link;

	function __construct()
	{
		$this->link=conectar();
	}
	function create($datos)
	{
		$sql="INSERT INTO users (full_name, number_phone) VALUES ('".$datos[0]."', '".$datos[1]."')";
		$respuesta=$this->link->query($sql);
		if(!$respuesta)
		{
			echo $this->link->error;
		}
		else
		{
			return $respuesta;
		}
	}
	function read()
	{
		$sql="SELECT * FORM users";
		$tabla=$this->link->query($sql);
		return $tabla;
	}
	function update()
	{
		
	}
	function delete()
	{
		
	}
}