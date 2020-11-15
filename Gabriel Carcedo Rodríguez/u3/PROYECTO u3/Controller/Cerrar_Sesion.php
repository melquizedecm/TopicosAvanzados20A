<?php
//CIERRA LA SESIÓN
session_start();
unset($_SESSION['usuario']);
session_destroy();
header('location: ../View/Login/login.php');