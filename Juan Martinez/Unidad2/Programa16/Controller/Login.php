<?php
/*
Recepcion y validacion de Login
1.- obtener lo valores
2.- filtrar y configurar el contenido
3.- validar
4.- regresar respuesta
*/
//Obtiene valores
if (isset($_POST['email']) && isset($_POST['password'])) {
  $nombre = $_POST['email'];
  $pass = $_POST['password'];
}
//filtrar y configurar contenido
  $nombre = trim($nombre);
  $pass = trim($pass);
  //Validar y regrresa una respuesta
  if ($nombre == "Juan" && $pass == "1234") {
    session_start();
    $_SESSION['usuario'] = $nombre;
    header ("location: ../View/Landing/vista.php");
  } else {
    header ("location: ../View/Login/login.php");
  }
?>
