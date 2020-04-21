<?php
	     //no se puede poner nada antes del session_destroy
	unset($_SESSION['user']);		//para desconfigurar a una variable
	session_destroy();
	header('location: ../View/Login/login.php');

?>