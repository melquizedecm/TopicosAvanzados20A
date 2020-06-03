<!--
Sorce: Cerrar_Sesion.php
Description: Use of the Session Var in PHP
Date: 12/Mar/2020
Author: Gabriel Carcedo Rodríguez
        Lizzie G. Medina Cetina
        Daniel O. Bacab González
-->
<?php
//CIERRA LA SESIÓN INICIADA
session_start();
unset($_SESSION['usuario']);
session_destroy();
//REDIRECCIONA EL LOCALHOST
header('location: ../View/Login/login.php');