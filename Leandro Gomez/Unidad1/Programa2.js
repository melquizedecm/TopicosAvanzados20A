/*
****************************************
*Source: Programa1.js
*Descripción: Sumar calificaciones
*Date: 13/Feb/2020
*Author: Ing.Leandro González Gómez
****************************************
*/
// Sirve para pedir dos calificaciones distintas
var Calificacion1= prompt ("Escriba la calificacion numerica");
var Calificacion2= prompt ("Escriba la calificacion numerica");
// En caso de que se ingresen letras u otros símbolos que no sean números...
//...Enviará un mensaje que diga que lo que se ingreso no son números.
if (isNaN(Calificacion1) && isNaN(Calificacion2)){

	alert("No son numeros");
}
// Suma las calificaciones.
else{
	var Suma = parseInt(Calificacion1) + parseInt(Calificacion2);
alert(Suma);
}
