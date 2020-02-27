/*
 ************************************** 
 *Source: Practica 4.js
 *Description: Web page to define the number of qualifications that will be received
 *Date: 13/Feb/2020
 *Author: Gabriel Carcedo Rodríguez
 **************************************
 */

//DEFINIR LA CANTIDAD DE CALIFICACIONES QUE SE LEERÁN
var Cant= prompt ("Escriba la cantidad de calificaciones");
var Calificaciones= 0;
var Sum= 0;
var Prom;
//VA RECIBIENDO CADA CALIFICACIÓN, MISMA QUE VA AL SUMADOR Sum
for (var i = 0; i < Cant; i++) 
{
	Calificaciones= parseFloat(prompt("Digite la calificacion"))
    Sum= Sum + Calificaciones;
}
//SE HALLA EL PROMEDIO DE LAS CALIFICACIONES Y SE IMPRIME
Prom  = Sum / Cant;
alert("El promedio es: " + Prom);
