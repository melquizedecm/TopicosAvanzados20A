/*
 Source: Programa 4
 Description: Lee una cantidad de calificaciones, las suma y se muestra el promedio.
 Date: 13/Feb/2020
 Author: Lizzie Medina Cetina
 */

// Se indican cuantas calificaciones se van a leer.
var Cantidad= prompt ("Escriba el número de calificaciones");
var Cali= 0, Suma= 0;
var Promedio;
//Entran las calificaciones Y despues estás van al sumador.
for (var i = 0; i < Cantidad; i++) 
{
	Cali= parseFloat(prompt("Escriba la calificación"))
    Suma= Suma + Cali;
}
//Se tiene el rpomedio de las calificaciones y lo muestra en pantalla.
Prom  = Suma / Cantidad;
alert("El promedio es: " + Promedio);
