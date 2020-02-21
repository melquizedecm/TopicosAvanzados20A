// Promedio de calificaciones
var Cant= prompt ("Escriba la cantidad de calificaciones");
var Calificaciones= 0;
var Sum= 0;
var Prom;
  for (var i = 0; i < Cant; i++) {
    Calificaciones= parseFloat(prompt("Digite la calificacion"))
    Sum= Sum + Calificaciones;
  }
Prom  = Sum / Cant;
alert("El promedio es:" + Prom);
