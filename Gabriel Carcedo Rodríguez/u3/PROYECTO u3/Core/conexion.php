<?php  

//configarar variables
DBserver = "localhost";
DBuser = "";
DBpass = "";
DBdatos = "user";

$link = mysqli_connect(DBserver,DBuser,DBpass,DBdatos);

echo $link;

?>