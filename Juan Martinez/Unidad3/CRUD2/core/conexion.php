<?php
function conectar(){
  $server="localhost";
  $user="root";
  $password="";
  $db="user";

  $link = mysqli_connect($server, $user, $password, $db);
  return $link;
}
?>
