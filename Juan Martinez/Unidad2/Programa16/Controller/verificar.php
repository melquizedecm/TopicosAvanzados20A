<?php

if (isset($_POST['text']) && isset($_POST['contraseña'])) {
  $nombre = $_POST['text'];
  $pass = $_POST['contraseña'];
  echo 'Bienvenido: '.$nombre;
} else {
  header ('location: ../index.php');
}





?>