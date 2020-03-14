<?php

if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {
    $nombre = trim($_POST['inputText']);
    $password = trim($_POST['inputPassword']);

    if ($nombre == 'Juan') {
        echo 'Bienvenido'.$nombre;
    } else {
        echo 'Usuario equivocado'.$nombre;
    }
} else {
    header('location: ../login.php');
}