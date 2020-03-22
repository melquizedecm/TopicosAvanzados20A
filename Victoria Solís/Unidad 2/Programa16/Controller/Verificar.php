<?php

if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {
    $nombre = trim($_POST['inputText']);
    $password = trim($_POST['inputPassword']);
    echo "Bienvenido: ".$nombre;
}
else 
{
    header('/location:..index.html');
}




?>