/*
+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*Source: Programa1.js
*Description: Calificaciones.
*Date: 14/02/2020
*Author: Miguel Angel Pech Mena
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/
var calificacion1 = prompt ("Escribe una calificacion");
var calificacion2 = prompt ("Escribe una calificacion");

if (IsNaN(calificacion1) || IsNan(calificacion2)) {
  alert("No es un numero");
}else {
    var suma = parseInt(calificacion1) + parseInt(calificacion2);
    alert(suma);
}
