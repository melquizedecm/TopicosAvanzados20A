/*
Source:         Program 4.html
Description:    Calificaciones JS
Date:           18/Feb/20
Author: 		Mario Leon Garcia

Pide calificaciones y saca el promedio*/
var Cant= prompt ("Escriba la cantidad de calificaciones");
var Calif= 0;
var Sum= 0;
var Prom;
  for (var i = 0; i < Cant; i++) {
    Calif= parseFloat(prompt("Digite la calificacion"))
    Sum= Sum + Calif;
  }
Prom  = Sum / Cant;
alert("El promedio es:" + Prom);
