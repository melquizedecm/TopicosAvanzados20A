/*
*source: Programa6.js
*description: Validar si es numerico
*date: --/feb/2020
*author: Carlos Gio Rivas
*/
var calificacion = prompt("Escribe tu calificacion");
var calificacion2 = prompt("Escribe tu calificacion");
if(isNaN(calificacion) || isNaN(calificacion2)){
  alert("No son numeros");
}
else{
  var suma =  parseInt(calificacion)+parseInt(calificacion2);
  alert(suma);
}