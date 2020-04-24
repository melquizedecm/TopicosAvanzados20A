<?php

if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {
    $nombre = $_POST['inputText'];
    $password = $_POST['inputPassword'];
    if ($nombre == 'Juan'{
    	echo 'Bienvenido';
    } else {
    	echo 'Usuario equivocado';
    }
}
else{
    echo 'Error en la página: debes ingresar tus datos';
}