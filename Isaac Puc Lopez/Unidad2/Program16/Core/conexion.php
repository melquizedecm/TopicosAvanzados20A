<?php
//configurar variables
$DBserver="localhost";
$DBuser="root";
$DBpas="";
$DBdatos="user"; //nombre de la tabla de la base de datos




$link = mysqli_connect(DBserver,DBuser,DBpass,DBdatos);

echo $link; //si no se conecta saldrá un error en pnatalla