<?php

/*  RECEPCION Y VALIDACION DEL LOGIN
*1. OBTENER LOS VALORES
*2. FILTRAR Y CONFIGURAR EL CONTENIDO
*3. VALIDAR
*4. REGRESAR UNA RESPUESTA
*/

//1. OBTENER VALORES
if (isset($_POST['inputUser']) && isset($_POST['inputPassword'])) {
    $username = $_POST['inputUser'];
    $password = $_POST['inputPassword'];
}
//2. FILTRAR Y CONFIGURAR EL CONTENIDO
$username = trim($username);
$password = trim($password);

//3,4. VALIDAR Y REGRESAR UNA RESPUESTA
if ($username == 'Juanito' && $password == '1234') {
    session_start();
    $_SESSION['usuario'] = $username;
    header('location: ../View/Landing/');
} else {
    unset($_SESSION['usuario']);
    session_destroy();
    header('location: ../View/Login/');
}