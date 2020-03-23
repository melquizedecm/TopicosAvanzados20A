<?php
    
    //validación isset
    if (isset($_POST['inputText']) && isset($_POST['inputPassword'])) {   //utilizando post oculta la información.
    $nombre = trim ($_POST['inputText']);
    $password = trim ($_POST['inputPassword']);

     if($nombre=='Lizzie'){
        

     	echo "Bienvenido";
     }
     else{
     	echo 'Usuario equivocado';
     }
    
}
else{
    //echo "Error en la página: debes ingresar tus datos";
    header('location:../index.php');
}
      
     //trim; Es para quitar los caracteres especiales.
     
    //echo $nombre; "--".$password; //el punto es para concatenar 2 variables
    //echo $password;
