<?php
/*********************************************************************************************************************************************
********************************
# Program Name: Program18.php
# Authors: Juan Manuel Martinez Aké
# Description: Conexion a base datos con una consulta Select para ver los datos
#
# Funciones: Tendra la funciones de la conexion para poder hacer parte del crud
#
******************************************************************************
*****************************************************************************/

//Se declaran las variables para la conexion
$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "user";

//Se crea la conexion con el servidor
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido conectar a la base de datos" );

//Se crea la consulta
$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

//Se crea la tabla donde se mostrara los datos obtenidos de la conexion
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Numero</th>";
echo "</tr>";

//Se asignan los campos de la BD a mostrar
while ($columna = mysqli_fetch_array( $resultado )){
 echo "<tr>";
 echo "<td>" . $columna['full_name'] . "</td><td>" . $columna['number_phone'] . "</td>";
 echo "</tr>";
}

echo "</table>";

//Cerramos la conexion con la BD
mysqli_close( $conexion );
?>
