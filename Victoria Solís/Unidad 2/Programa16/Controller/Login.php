<?php

/*Recepción y validación del Login
1. Obtener valores 
2. Filtrar y configurar el contenido 
3. Validar 
4. Regresar una respuesta
*/


//1. Obtener valores 
if(isset($_POST['inputUser']) && isset($_POST['inputPassword']) ){
    $username=$_POST['inputUser'];
    $password=$_POST['inputPassword'];
}

//2. Filtrar y configurar el contenido
$username=trim($username);
$password=trim($password);
//username=md5($username);

//3, 4.Validar y regresar una respuesta 

if ($username=="Juanito" && $password=="12345")
{
    session_start();
    $_SESSION['usuario']=$username;
    $_SESSION['password']=$password;
    header('location:../View/Landing');
}
else 
{
    echo ("Bienvenido")
}


?>