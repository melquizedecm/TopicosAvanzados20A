<?php

///1. Creación de variables
$DBserver="localhost";
$DBuser="root";
$DBpas="";
$DBdtos="user";

$link = mysqli_connect(DBserver,DBuser,DBpass,DBdatos);
echo ("Me conecte");

?>