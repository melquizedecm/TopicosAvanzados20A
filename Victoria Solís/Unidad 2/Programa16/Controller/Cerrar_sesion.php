<?php
session_start(); //Antes de session star o header no debe haber nada. Pegado a la línea de php en este caso
unset($_SESSION['usuario']);
session_destroy();
header('location ../View/Login')
?>