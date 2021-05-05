/*
****************************************
* Source: 			Programa2.js 
* Description:   	Suma de calificaiones en html.
* Date: 			7/Feb/2020
* Author: 			Josue Antonio Castro Colli
****************************************
*/
//Validaciones 
var calificacion1 = prompt("Escribe una calificación númerica");
var calificacion2 = prompt("Escribe una calificación númerica");

if (isNaN (calificacion1) || isNaN(calificacion2) ){
	alert ("No es númerico ");
} else {
	var suma = parseInt(calificacion1) + parseInt(calificacion2);
	alert(suma);
	
}
