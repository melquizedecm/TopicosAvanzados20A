<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$facebook = (isset($_POST['facebook'])) ? $_POST['facebook'] : '';
$n_cel = (isset($_POST['n_cel'])) ? $_POST['n_cel'] : '';
$Cantidad = (isset($_POST['Cantidad'])) ? $_POST['Cantidad'] : '';
$Pedido = (isset($_POST['Pedido'])) ? $_POST['Pedido'] : '';
$Total = (isset($_POST['Total'])) ? $_POST['Total'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO personas (nombre, facebook, n_cel, Cantidad, Pedido, Total) VALUES('$nombre', '$facebook', '$n_cel', '$Cantidad', '$Pedido', '$Total') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, facebook, n_cel, Cantidad, Pedido, Total FROM personas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE personas SET nombre='$nombre', facebook='$facebook', n_cel='$n_cel', Cantidad='$Cantidad', Pedido='$Pedido', Total='$Total' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre, facebook, n_cel, Cantidad, Pedido, Total FROM personas WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM personas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
