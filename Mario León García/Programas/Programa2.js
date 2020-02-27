/*
*****************************************
* Source: Programa2.js
* Description: Funciones iniciales en JS
* Date: 13/Feb/2020
* Author: Mario Steven León García
*****************************************
*/

var calif1= prompt("Escribe una calificacion numerica");
var calif2= prompt("Escribe una calificacion numerica");

if (isNaN(calif1) || isNaN(calif2)){
	alert("No es numerico");
} else {
	alert("Es numerico");
	var suma= parseInt(calif1)+parseInt(calif2);
	alert(suma);
}







































