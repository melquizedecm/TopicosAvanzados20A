<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    echo $usuario;
} else {
    header('location: ../Login/login.php');
}
?>