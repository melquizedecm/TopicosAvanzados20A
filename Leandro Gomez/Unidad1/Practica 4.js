/*
****************************************
*Source: Programa1.js
*Descripción: Pedir calificaciones y mostrar el promedio
*Date: 14/Feb/2020
*Author: Leandro González Gómez
****************************************
*/
// Pide que ingrese la cantidad de calificaciones que se van a leer.
var Cant= prompt ("Escriba la cantidad de calificaciones");
var Calificaciones= 0;
var Sum= 0;
var Prom;
//Digitan las calificaciones que se pidieron
  for (var i = 0; i < Cant; i++) {
    Calificaciones= parseFloat(prompt("Digite la calificacion"))
    Sum= Sum + Calificaciones;
  }
Prom  = Sum / Cant;
alert("El promedio es:" + Prom);
