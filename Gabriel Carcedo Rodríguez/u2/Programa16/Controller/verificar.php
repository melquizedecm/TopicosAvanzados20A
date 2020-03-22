<?php

if(isset($_GET['inputName']) && isset($_GET['inputUser']) && isset($_GET['inputPassword']))
{
	$name = trim($_GET['inputName']);
	$user = trim($_GET['inputUser']);
	$pass = trim($_GET['inputPass']);
	if($name=='Gabriel' && $user=='cubacarcedo' && $pass=='111')
	{
		echo "HOLA";
		//header("location: ../View/LandingPage/index.html");
	}
	else
	{
		echo "HOLA";
		//header("location: ../index.php");
	}
}
else
{
	header("location: ../index.php");
}

?>