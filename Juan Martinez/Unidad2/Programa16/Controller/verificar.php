<?php

if (isset($_POST['text']) && isset($_POST['contraseña'])) {
  $nombre = $_POST['text'];
  $pass = $_POST['contraseña'];

  //header("location: ../View/index.php");
} else {
  header ('location: ../index.php');
}


?>
